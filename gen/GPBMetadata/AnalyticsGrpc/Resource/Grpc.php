<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: AnalyticsGrpc/Resource/Grpc.proto

namespace GPBMetadata\AnalyticsGrpc\Resource;

class Grpc
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\AnalyticsGrpc\Resource\Messages::initOnce();
        \GPBMetadata\ProtoMessages\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!AnalyticsGrpc/Resource/Grpc.protoanalyticsGrpcResource%AnalyticsGrpc/Resource/Messages.protoProtoMessages/Common.proto2�

AnalyticsResourceR
ListSources.google.protobuf.Empty+.analyticsGrpcResource.ApiSourceMessageListR
ListMetrics.google.protobuf.Empty+.analyticsGrpcResource.ApiMetricMessageList_
	ListDatas".analyticsGrpcResource.DataRequest..analyticsGrpcResource.ApiScrapDataMessageList`
ListLastMeasurements.google.protobuf.Empty0.analyticsGrpcResource.ApiMeasurementMessageList[
LastMeasurement.google.protobuf.Empty0.analyticsGrpcResource.ApiMeasurementMessageListr
ListMeasurements,.analyticsGrpcResource.ApiMeasurementRequest0.analyticsGrpcResource.ApiMeasurementMessageListm
ListLastMeasurementByDate.protoMessages.DateOnlyMessage0.analyticsGrpcResource.ApiMeasurementMessageListV
ListLabelsTypes.google.protobuf.Empty+.analyticsGrpcResource.LabelTypeMessageListZ

ListValues#.analyticsGrpcResource.ValueRequest\'.analyticsGrpcResource.ValueMessageListf
ListLastValues\'.analyticsGrpcResource.LastValueRequest+.analyticsGrpcResource.LastValueMessageList}
LastMultiMeasurements2.analyticsGrpcResource.LastMultiMeasurementRequest0.analyticsGrpcResource.ApiMeasurementMessageListy
ListMultiMeasurements..analyticsGrpcResource.MultiMeasurementRequest0.analyticsGrpcResource.ApiMeasurementMessageListy
LastMeasurementByDate-.analyticsGrpcResource.LastMeasurementRequest1.analyticsGrpcResource.ApiLastMeasurementResponsebproto3'
        , true);

        static::$is_initialized = true;
    }
}
