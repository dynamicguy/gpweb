#!/bin/sh

DIR=`pwd`
rm -rf /tmp/sandbox
mkdir /tmp/sandbox
cp -r gp /tmp/sandbox/
cp -r src /tmp/sandbox/
cp -r web /tmp/sandbox/
cp -r README /tmp/sandbox/
cp -r LICENSE /tmp/sandbox/
cd /tmp/sandbox
sudo rm -rf create_sandbox.sh gp/cache/* gp/logs/* .git*
chmod 777 gp/cache gp/logs
cd ..
# avoid the creation of ._* files
export COPY_EXTENDED_ATTRIBUTES_DISABLE=true
export COPYFILE_DISABLE=true
tar zcpf $DIR/sandbox_2_0_PR2.tgz sandbox
sudo rm -f $DIR/sandbox_2_0_PR2.zip
zip -rq $DIR/sandbox_2_0_PR2.zip sandbox
