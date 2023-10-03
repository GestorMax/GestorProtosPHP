#!/bin/bash

outDir=gen
mkdir -p $outDir

protoc --proto_path=GestorProtos --php_out=$outDir --grpc_out=$outDir GestorProtos/AnalyticsGrpc/Resource/Grpc.proto
protoc --proto_path=GestorProtos --php_out=$outDir GestorProtos/AnalyticsGrpc/Resource/Messages.proto
protoc --proto_path=GestorProtos --php_out=$outDir GestorProtos/ProtoMessages/Common.proto