<?php

namespace Symfony\Components\Validator\Extension;

use Symfony\Components\DependencyInjection\ContainerInterface;
use Symfony\Components\Validator\ConstraintValidatorFactoryInterface;
use Symfony\Components\Validator\Constraint;
use Symfony\Components\Validator\ConstraintValidatorInterface;

/**
 * Creates ConstraintValidator instances by querying a dependency injection
 * container
 *
 * The constraint validators are expected to be services. The services should
 * have the fully qualified names of the validators as IDs. The backslashes
 * in the names should be replaced by dots.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Bernhard Schussek <bernhard.schussek@symfony-project.com>
 */
class DependencyInjectionValidatorFactory implements ConstraintValidatorFactoryInterface
{

    protected $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Returns a contraint validator from the container service, setting it if it
     * doesn't exist yet
     *
     * Throws an exception if validator service is not instance of
     * ConstraintValidatorInterface.
     *
     * @param  Constraint $constraint
     * @return ConstraintValidatorInterface
     * @throws \LogicException
     */
    public function getInstance(Constraint $constraint)
    {
        $className = $constraint->validatedBy();
        $id = $this->getServiceIdFromClass($className);

        if (!$this->container->hasService($id)) {
            $this->container->setService($id, new $className());
        }

        $validator = $this->container->getService($id);

        if (!$validator instanceof ConstraintValidatorInterface) {
            throw new \LogicException('Service "' . $id . '" is not instance of ConstraintValidatorInterface');
        }

        return $validator;
    }

    /**
     * Returns the matching service ID for the given validator class name
     *
     * @param  string $className
     * @return string
     */
    protected function getServiceIdFromClass($className)
    {
        return str_replace('\\', '.', $className);
    }
}