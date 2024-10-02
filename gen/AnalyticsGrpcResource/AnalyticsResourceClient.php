<?php
// GENERATED CODE -- DO NOT EDIT!

namespace AnalyticsGrpcResource;

/**
 */
class AnalyticsResourceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSources(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/ListSources',
        $argument,
        ['\AnalyticsGrpcResource\ApiSourceMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMetrics(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/ListMetrics',
        $argument,
        ['\AnalyticsGrpcResource\ApiMetricMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AnalyticsGrpcResource\DataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListDatas(\AnalyticsGrpcResource\DataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/analyticsGrpcResource.AnalyticsResource/ListDatas',
        $argument,
        ['\AnalyticsGrpcResource\ApiScrapDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLastMeasurements(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/ListLastMeasurements',
        $argument,
        ['\AnalyticsGrpcResource\ApiMeasurementMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LastMeasurement(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/LastMeasurement',
        $argument,
        ['\AnalyticsGrpcResource\ApiMeasurementMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AnalyticsGrpcResource\ApiMeasurementRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMeasurements(\AnalyticsGrpcResource\ApiMeasurementRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/ListMeasurements',
        $argument,
        ['\AnalyticsGrpcResource\ApiMeasurementMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ProtoMessages\DateOnlyMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLastMeasurementByDate(\ProtoMessages\DateOnlyMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/ListLastMeasurementByDate',
        $argument,
        ['\AnalyticsGrpcResource\ApiMeasurementMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLabelsTypes(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/ListLabelsTypes',
        $argument,
        ['\AnalyticsGrpcResource\LabelTypeMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AnalyticsGrpcResource\ValueRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListValues(\AnalyticsGrpcResource\ValueRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/ListValues',
        $argument,
        ['\AnalyticsGrpcResource\ValueMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AnalyticsGrpcResource\LastValueRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLastValues(\AnalyticsGrpcResource\LastValueRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/ListLastValues',
        $argument,
        ['\AnalyticsGrpcResource\LastValueMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AnalyticsGrpcResource\LastMultiMeasurementRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LastMultiMeasurements(\AnalyticsGrpcResource\LastMultiMeasurementRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/LastMultiMeasurements',
        $argument,
        ['\AnalyticsGrpcResource\ApiMeasurementMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AnalyticsGrpcResource\MultiMeasurementRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMultiMeasurements(\AnalyticsGrpcResource\MultiMeasurementRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/ListMultiMeasurements',
        $argument,
        ['\AnalyticsGrpcResource\ApiMeasurementMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AnalyticsGrpcResource\LastMeasurementRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LastMeasurementByDate(\AnalyticsGrpcResource\LastMeasurementRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/LastMeasurementByDate',
        $argument,
        ['\AnalyticsGrpcResource\ApiLastMeasurementResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \AnalyticsGrpcResource\LabelDatasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLabelDatas(\AnalyticsGrpcResource\LabelDatasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analyticsGrpcResource.AnalyticsResource/GetLabelDatas',
        $argument,
        ['\AnalyticsGrpcResource\LabelDatasMessageList', 'decode'],
        $metadata, $options);
    }

}
