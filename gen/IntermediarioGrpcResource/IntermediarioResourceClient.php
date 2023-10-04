<?php
// GENERATED CODE -- DO NOT EDIT!

namespace IntermediarioGrpcResource;

/**
 */
class IntermediarioResourceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * stores
     * @param \IntermediarioGrpcResource\SaldoPersonasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListSaldoPersonas(\IntermediarioGrpcResource\SaldoPersonasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListSaldoPersonas',
        $argument,
        ['\IntermediarioGrpcResource\SaldoPersonasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\SaldoPersonasPorPlanRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListSaldoPersonasPorPlan(\IntermediarioGrpcResource\SaldoPersonasPorPlanRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListSaldoPersonasPorPlan',
        $argument,
        ['\IntermediarioGrpcResource\SaldoPersonasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\SaldoPersonasTotalesPorPlanRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListSaldoPersonasTotalesPorPlan(\IntermediarioGrpcResource\SaldoPersonasTotalesPorPlanRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListSaldoPersonasTotalesPorPlan',
        $argument,
        ['\IntermediarioGrpcResource\SaldoPersonasTotalesPorPlanResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\FlujoDeFondosRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListFlujoDeFondos(\IntermediarioGrpcResource\FlujoDeFondosRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListFlujoDeFondos',
        $argument,
        ['\IntermediarioGrpcResource\FlujoDeFondosResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListCuentasACobrar(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListCuentasACobrar',
        $argument,
        ['\IntermediarioGrpcResource\CuentasACobrarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListCuentasAPagar(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListCuentasAPagar',
        $argument,
        ['\IntermediarioGrpcResource\CuentasAPagarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListCuentasCorrientesSaldos(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListCuentasCorrientesSaldos',
        $argument,
        ['\IntermediarioGrpcResource\CuentasCorrientesSaldosResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\ValoresEnCarteraRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListValoresEnCartera(\IntermediarioGrpcResource\ValoresEnCarteraRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListValoresEnCartera',
        $argument,
        ['\IntermediarioGrpcResource\ValoresEnCarteraResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\MayorDiarioFisicosRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListMayorDiarioFisicos(\IntermediarioGrpcResource\MayorDiarioFisicosRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListMayorDiarioFisicos',
        $argument,
        ['\IntermediarioGrpcResource\MayorDiarioFisicosResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\BalanceContableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListBalanceContable(\IntermediarioGrpcResource\BalanceContableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListBalanceContable',
        $argument,
        ['\IntermediarioGrpcResource\BalanceContableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\FisicosPorVencimientoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListFisicosPorVencimiento(\IntermediarioGrpcResource\FisicosPorVencimientoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListFisicosPorVencimiento',
        $argument,
        ['\IntermediarioGrpcResource\FisicosPorVencimientoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\MayorContableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListMayorContable(\IntermediarioGrpcResource\MayorContableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListMayorContable',
        $argument,
        ['\IntermediarioGrpcResource\MayorContableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\FlujoDeFondosExtRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListFlujoDeFondosExt(\IntermediarioGrpcResource\FlujoDeFondosExtRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListFlujoDeFondosExt',
        $argument,
        ['\IntermediarioGrpcResource\FlujoDeFondosExtResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * tables
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListProductos(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListProductos',
        $argument,
        ['\IntermediarioGrpcResource\ProductoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListEmpresas(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListEmpresas',
        $argument,
        ['\IntermediarioGrpcResource\EmpresaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListPersonas(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListPersonas',
        $argument,
        ['\IntermediarioGrpcResource\PersonaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListListasPrecios(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListListasPrecios',
        $argument,
        ['\IntermediarioGrpcResource\ListasPrecioResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListListasPreciosDetalle(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListListasPreciosDetalle',
        $argument,
        ['\IntermediarioGrpcResource\ListasPreciosDetalleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\DetailsProductPriceListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListDetailsProductPerList(\IntermediarioGrpcResource\DetailsProductPriceListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListDetailsProductPerList',
        $argument,
        ['\IntermediarioGrpcResource\PriceImporterProductResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListCtasCtes(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListCtasCtes',
        $argument,
        ['\IntermediarioGrpcResource\CtasCtesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListMonedas(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListMonedas',
        $argument,
        ['\IntermediarioGrpcResource\MonedaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListValoresMonedas(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListValoresMonedas',
        $argument,
        ['\IntermediarioGrpcResource\ValoresMonedaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListTiposInsumos(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListTiposInsumos',
        $argument,
        ['\IntermediarioGrpcResource\InsumosResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListUnidades(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListUnidades',
        $argument,
        ['\IntermediarioGrpcResource\UnidadesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * querys
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListPlanDeCuentasDeCentro(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListPlanDeCuentasDeCentro',
        $argument,
        ['\IntermediarioGrpcResource\PlanDeCuentasCentroResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListPlanDeCuentasDeGestion(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListPlanDeCuentasDeGestion',
        $argument,
        ['\IntermediarioGrpcResource\PlanDeCuentasGestionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ProtoMessages\StringMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListPlanDeCuentas(\ProtoMessages\StringMessage $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListPlanDeCuentas',
        $argument,
        ['\IntermediarioGrpcResource\PlanDeCuentasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\ChequesEmitidosRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListChequesEmitidosCuenta(\IntermediarioGrpcResource\ChequesEmitidosRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListChequesEmitidosCuenta',
        $argument,
        ['\IntermediarioGrpcResource\ChequesEmitidosResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\PersonBalanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function GetPersonBalance(\IntermediarioGrpcResource\PersonBalanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/GetPersonBalance',
        $argument,
        ['\IntermediarioGrpcResource\PersonBalanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListBonificacionesPersonas(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListBonificacionesPersonas',
        $argument,
        ['\IntermediarioGrpcResource\BonificacionesPersonasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListBonificacionesGrupos(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListBonificacionesGrupos',
        $argument,
        ['\IntermediarioGrpcResource\BonificacionesGruposResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * get
     * @param \ProtoMessages\Int32Message $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetListaPrecio(\ProtoMessages\Int32Message $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/intermediarioGrpcResource.IntermediarioResource/GetListaPrecio',
        $argument,
        ['\IntermediarioGrpcResource\ListasPrecioResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PriceImporter
     * @param \IntermediarioGrpcResource\PriceImporterProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateProductPrice(\IntermediarioGrpcResource\PriceImporterProductRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/intermediarioGrpcResource.IntermediarioResource/UpdateProductPrice',
        $argument,
        ['\ProtoMessages\ResponseResult', 'decode'],
        $metadata, $options);
    }

    /**
     * resources
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDatabases(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/intermediarioGrpcResource.IntermediarioResource/ListDatabases',
        $argument,
        ['\IntermediarioGrpcResource\DatabaseMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListCompanies(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/intermediarioGrpcResource.IntermediarioResource/ListCompanies',
        $argument,
        ['\IntermediarioGrpcResource\EmpresaMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListCompanyPersons(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/intermediarioGrpcResource.IntermediarioResource/ListCompanyPersons',
        $argument,
        ['\IntermediarioGrpcResource\PersonaMessageList', 'decode'],
        $metadata, $options);
    }

    /**
     * direct access to remote Database
     * @param \IntermediarioSharedMessages\WriteRecordsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function WriteRecord(\IntermediarioSharedMessages\WriteRecordsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/intermediarioGrpcResource.IntermediarioResource/WriteRecord',
        $argument,
        ['\ProtoMessages\ResponseResult', 'decode'],
        $metadata, $options);
    }

    /**
     * Lucius
     * @param \IntermediarioGrpcResource\LuciusMayorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListLuciusMayor(\IntermediarioGrpcResource\LuciusMayorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListLuciusMayor',
        $argument,
        ['\IntermediarioGrpcResource\LuciusMayorContableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IntermediarioGrpcResource\LuciusBalanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListLuciusBalance(\IntermediarioGrpcResource\LuciusBalanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListLuciusBalance',
        $argument,
        ['\IntermediarioGrpcResource\LuciusBalanceContableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ProtoMessages\Int32Message $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListLuciusPlanDeCuentas(\ProtoMessages\Int32Message $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/intermediarioGrpcResource.IntermediarioResource/ListLuciusPlanDeCuentas',
        $argument,
        ['\IntermediarioGrpcResource\LuciusPlanDeCuentasResponse', 'decode'],
        $metadata, $options);
    }

}
