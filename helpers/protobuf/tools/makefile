PROTO_PATH=./src
PROTO=./src/*proto
BUILD_PATH=./build

all: c python php

php: $(PROTO)
	mkdir -p $(BUILD_PATH)/php
#php ./protoc.php $^
#mv pb_proto_* $(BUILD_PATH)/php
	protoc --php_out=$(BUILD_PATH)/php --proto_path=$(PROTO_PATH) --plugin=pprotoc-gen-php $^

c: $(PROTO)
	mkdir -p $(BUILD_PATH)/cpp
	protoc --cpp_out=$(BUILD_PATH)/cpp --proto_path=$(PROTO_PATH) $^

python: $(PROTO)
	mkdir -p $(BUILD_PATH)/py
	protoc --python_out=$(BUILD_PATH)/py --proto_path=$(PROTO_PATH) $^


clean:
	rm ./build/* -rf
