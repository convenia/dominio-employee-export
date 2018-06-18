<?php

namespace Convenia\Dominio\EmployeeExport\Registries;

use Convenia\Dominio\EmployeeExport\Fields\Formats\FieldC;
use Convenia\Dominio\EmployeeExport\Fields\Formats\FieldN;

/**
 * Class EmployeeRegistry.
 */
class EmployeeRegistry extends Registry
{
    protected $length = 507;

    /**
     * @var array
     */
    protected $defaultFields = [
        'nacionalidade' => [
            'format'   => FieldC::class,
            'position' => 1,
            'length'   => 7,
        ],
        'codi_emp' => [
            'format'   => FieldC::class,
            'position' => 8,
            'length'   => 7,
        ],
        'horas_semana' => [
            'format'   => FieldC::class,
            'position' => 15,
            'length'   => 5,
        ],
        'admissao' => [
            'format'   => FieldC::class,
            'position' => 20,
            'length'   => 10,
        ],
        'horas_mes' => [
            'format'   => FieldC::class,
            'position' => 30,
            'length'   => 5,
        ],
        'EXCLUIR_EVENTO_S_2205_RETIFICACAO' => [
            'format'   => FieldC::class,
            'position' => 35,
            'length'   => 7,
        ],
        'IMOVEL_ADQUIRIDO_RECURSOS_FGTS' => [
            'format'   => FieldC::class,
            'position' => 42,
            'length'   => 7,
        ],
        'usa_sist' => [
            'format'   => FieldC::class,
            'position' => 49,
            'length'   => 7,
        ],
        'data_nascimento' => [
            'format'   => FieldC::class,
            'position' => 56,
            'length'   => 10,
        ],
        'venc_ferias' => [
            'format'   => FieldC::class,
            'position' => 66,
            'length'   => 10,
        ],
        'INCLUSAO_VALIDADA_ESOCIAL_S_2205' => [
            'format'   => FieldC::class,
            'position' => 76,
            'length'   => 7,
        ],
        'EMPRESA_ORIGEM_DESONERADA' => [
            'format'   => FieldC::class,
            'position' => 83,
            'length'   => 7,
        ],
        'DIRIGENTE_SINDICAL' => [
            'format'   => FieldC::class,
            'position' => 90,
            'length'   => 7,
        ],
        'BRASILEIRO_NASCIDO_EXTERIOR' => [
            'format'   => FieldC::class,
            'position' => 97,
            'length'   => 7,
        ],
        'OPCAO_PLANO_SAUDE' => [
            'format'   => FieldC::class,
            'position' => 104,
            'length'   => 7,
        ],
        'i_depto' => [
            'format'   => FieldC::class,
            'position' => 111,
            'length'   => 7,
        ],
        'ENVIAR_ESOCIAL' => [
            'format'   => FieldC::class,
            'position' => 118,
            'length'   => 7,
        ],
        'sai_rais' => [
            'format'   => FieldC::class,
            'position' => 125,
            'length'   => 1,
        ],
        'BENEFICIADO_PAT_ALIMENTACAO_CONVENIO' => [
            'format'   => FieldC::class,
            'position' => 126,
            'length'   => 7,
        ],
        'DESCONTAR_CONTRIBUICAO_SINDICAL_A_PARTIR_11_2017' => [
            'format'   => FieldC::class,
            'position' => 133,
            'length'   => 7,
        ],
        'cor' => [
            'format'   => FieldC::class,
            'position' => 140,
            'length'   => 7,
        ],
        'GERAR_RETIFICACAO_ESOCIAL_S_2205' => [
            'format'   => FieldC::class,
            'position' => 147,
            'length'   => 7,
        ],
        'tipo_contrib' => [
            'format'   => FieldC::class,
            'position' => 154,
            'length'   => 1,
        ],
        'CALCULAR_ADIANTAMENTO_SALARIAL' => [
            'format'   => FieldC::class,
            'position' => 155,
            'length'   => 7,
        ],
        'BENEFICIADO_PAT' => [
            'format'   => FieldC::class,
            'position' => 162,
            'length'   => 7,
        ],
        'i_filiais' => [
            'format'   => FieldC::class,
            'position' => 169,
            'length'   => 7,
        ],
        'origem_reg' => [
            'format'   => FieldC::class,
            'position' => 176,
            'length'   => 3,
        ],
        'gps_trimestral' => [
            'format'   => FieldC::class,
            'position' => 179,
            'length'   => 3,
        ],
        'paga_contr_sind' => [
            'format'   => FieldC::class,
            'position' => 182,
            'length'   => 1,
        ],
        'PAGA_CONTR_SIND_11_2017' => [
            'format'   => FieldC::class,
            'position' => 183,
            'length'   => 1,
        ],
        'ENVIAR_S_2200_REINTEGRACAO' => [
            'format'   => FieldC::class,
            'position' => 184,
            'length'   => 7,
        ],
        'contrib_indiv' => [
            'format'   => FieldC::class,
            'position' => 191,
            'length'   => 1,
        ],
        'contrib_indiv' => [
            'format'   => FieldC::class,
            'position' => 191,
            'length'   => 1,
        ],
    ];
}
