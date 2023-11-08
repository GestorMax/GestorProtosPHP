#!/bin/bash

outDir=gen
mkdir -p $outDir

protoc --proto_path=GestorProtos --php_out=$outDir GestorProtos/ProtoMessages/Common.proto

protoc --proto_path=GestorProtos --php_out=$outDir --grpc_out=$outDir GestorProtos/AnalyticsGrpc/Resource/Grpc.proto
protoc --proto_path=GestorProtos --php_out=$outDir GestorProtos/AnalyticsGrpc/Resource/Messages.proto

protoc --proto_path=GestorProtos --php_out=$outDir --grpc_out=$outDir GestorProtos/IntermediarioGrpc/Resource/Grpc.proto
protoc --proto_path=GestorProtos --php_out=$outDir GestorProtos/IntermediarioGrpc/Resource/Messages.proto
protoc --proto_path=GestorProtos --php_out=$outDir GestorProtos/IntermediarioGrpc/Shared/IntermediarioCompanionMessages.g.proto
protoc --proto_path=GestorProtos --php_out=$outDir GestorProtos/IntermediarioGrpc/Shared/IntermediarioShared.proto
protoc --proto_path=GestorProtos --php_out=$outDir GestorProtos/IntermediarioGrpc/Shared/SyncedTables.g.proto