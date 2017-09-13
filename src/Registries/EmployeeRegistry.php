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
        'admissao' => [
            'format'       => FieldC::class,
            'position'     => 1,
            'length'       => 10,
        ],
        'ALVARA_JUDICIAL' => [
            'format'       => FieldC::class,
            'position'     => 11,
            'length'       => 7,
        ],
        'APOSENTADO' => [
            'format'       => FieldC::class,
            'position'     => 18,
            'length'       => 7,
        ],
        'BENEFICIADO_PAT' => [
            'format'       => FieldC::class,
            'position'     => 25,
            'length'       => 7,
        ],
        'BENEFICIADO_PAT_ADMINISTRACAO_COZINHAS' => [
            'format'       => FieldC::class,
            'position'     => 32,
            'length'       => 7,
        ],
        'BENEFICIADO_PAT_ALIMENTACAO_CONVENIO' => [
            'format'       => FieldC::class,
            'position'     => 39,
            'length'       => 7,
        ],
        'BENEFICIADO_PAT_CESTA_ALIMENTOS' => [
            'format'       => FieldC::class,
            'position'     => 46,
            'length'       => 7,
        ],
        'BENEFICIADO_PAT_REFEICAO_CONVENIO' => [
            'format'       => FieldC::class,
            'position'     => 53,
            'length'       => 7,
        ],
        'BENEFICIADO_PAT_REFEICOES_TRANSPORTADAS' => [
            'format'       => FieldC::class,
            'position'     => 60,
            'length'       => 7,
        ],
        'BENEFICIADO_PAT_SERVICO_PROPRIO' => [
            'format'       => FieldC::class,
            'position'     => 67,
            'length'       => 7,
        ],
        'BRASILEIRO_NASCIDO_EXTERIOR' => [
            'format'       => FieldC::class,
            'position'     => 74,
            'length'       => 7,
        ],
        'CALCULAR_ADIANTAMENTO_SALARIAL' => [
            'format'       => FieldC::class,
            'position'     => 81,
            'length'       => 7,
        ],
        'CALCULAR_INSS_PATRONAL' => [
            'format'       => FieldC::class,
            'position'     => 88,
            'length'       => 7,
        ],
        'CARGA_HORARIA_VARIAVEL' => [
            'format'       => FieldC::class,
            'position'     => 95,
            'length'       => 7,
        ],
        'categoria' => [
            'format'       => FieldC::class,
            'position'     => 102,
            'length'       => 7,
        ],
        'codi_emp' => [
            'format'       => FieldC::class,
            'position'     => 109,
            'length'       => 7,
        ],
        'contr_sobre_sal_min' => [
            'format'       => FieldC::class,
            'position'     => 116,
            'length'       => 3,
        ],
        'contrib_indiv' => [
            'format'       => FieldC::class,
            'position'     => 119,
            'length'       => 1,
        ],
        'cor' => [
            'format'       => FieldC::class,
            'position'     => 120,
            'length'       => 7,
        ],
        'COTA_DIFICIENTE' => [
            'format'       => FieldC::class,
            'position'     => 127,
            'length'       => 7,
        ],
        'cpf' => [
            'format'       => FieldC::class,
            'position'     => 134,
            'length'       => 11,
        ],
        'data_nascimento' => [
            'format'       => FieldC::class,
            'position'     => 145,
            'length'       => 10,
        ],
        'deficiente_fisico' => [
            'format'       => FieldC::class,
            'position'     => 155,
            'length'       => 3,
        ],
        'DESCONTAR_ESTOURO_RESCISAO_EMPRESA_ORIGEM' => [
            'format'       => FieldC::class,
            'position'     => 158,
            'length'       => 7,
        ],
        'DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 165,
            'length'       => 7,
        ],
        'emprego_ant' => [
            'format'       => FieldC::class,
            'position'     => 172,
            'length'       => 7,
        ],
        'EMPRESA_ORIGEM_DESONERADA' => [
            'format'       => FieldC::class,
            'position'     => 179,
            'length'       => 7,
        ],
        'ENDERECO_COMERCIAL' => [
            'format'       => FieldC::class,
            'position'     => 186,
            'length'       => 7,
        ],
        'forma_pagto' => [
            'format'       => FieldC::class,
            'position'     => 193,
            'length'       => 1,
        ],
        'GPS_CONJUNTA_NOVEMBRO_13_INTEGRAL' => [
            'format'       => FieldC::class,
            'position'     => 194,
            'length'       => 7,
        ],
        'gps_deducao' => [
            'format'       => FieldC::class,
            'position'     => 201,
            'length'       => 3,
        ],
        'gps_trimestral' => [
            'format'       => FieldC::class,
            'position'     => 204,
            'length'       => 3,
        ],
        'grau_instrucao' => [
            'format'       => FieldC::class,
            'position'     => 207,
            'length'       => 7,
        ],
        'horas_dia' => [
            'format'       => FieldC::class,
            'position'     => 214,
            'length'       => 5,
        ],
        'horas_mes' => [
            'format'       => FieldC::class,
            'position'     => 219,
            'length'       => 5,
        ],
        'horas_semana' => [
            'format'       => FieldC::class,
            'position'     => 224,
            'length'       => 5,
        ],
        'I_AFASTAMENTOS' => [
            'format'       => FieldC::class,
            'position'     => 229,
            'length'       => 7,
        ],
        'i_cargos' => [
            'format'       => FieldC::class,
            'position'     => 236,
            'length'       => 7,
        ],
        'i_ccustos' => [
            'format'       => FieldC::class,
            'position'     => 243,
            'length'       => 7,
        ],
        'i_depto' => [
            'format'       => FieldC::class,
            'position'     => 250,
            'length'       => 7,
        ],
        'i_empregados' => [
            'format'       => FieldC::class,
            'position'     => 257,
            'length'       => 7,
        ],
        'i_filiais' => [
            'format'       => FieldC::class,
            'position'     => 264,
            'length'       => 7,
        ],
        'IMOVEL_ADQUIRIDO_RECURSOS_FGTS' => [
            'format'       => FieldC::class,
            'position'     => 271,
            'length'       => 7,
        ],
        'nacionalidade' => [
            'format'       => FieldC::class,
            'position'     => 278,
            'length'       => 7,
        ],
        'nome' => [
            'format'       => FieldC::class,
            'position'     => 285,
            'length'       => 70,
        ],
        'oco_sefip' => [
            'format'       => FieldC::class,
            'position'     => 355,
            'length'       => 7,
        ],
        'OPCAO_PLANO_SAUDE' => [
            'format'       => FieldC::class,
            'position'     => 362,
            'length'       => 7,
        ],
        'opta_fgts' => [
            'format'       => FieldC::class,
            'position'     => 369,
            'length'       => 1,
        ],
        'ORGAO_EXPEDICAO_RG' => [
            'format'       => FieldC::class,
            'position'     => 370,
            'length'       => 7,
        ],
        'origem_reg' => [
            'format'       => FieldC::class,
            'position'     => 377,
            'length'       => 3,
        ],
        'paga_contr_sind' => [
            'format'       => FieldC::class,
            'position'     => 380,
            'length'       => 1,
        ],
        'POSSUI_DEFICIENCIA_INTELECTUAL' => [
            'format'       => FieldC::class,
            'position'     => 381,
            'length'       => 7,
        ],
        'POSSUI_REDUCAO_ALIQUOTA_INSS' => [
            'format'       => FieldC::class,
            'position'     => 388,
            'length'       => 7,
        ],
        'possui_vinc_out_emp' => [
            'format'       => FieldC::class,
            'position'     => 395,
            'length'       => 1,
        ],
        'RECEBIA_SEGURO_DESEMPREGO' => [
            'format'       => FieldC::class,
            'position'     => 396,
            'length'       => 7,
        ],
        'REMUNERACAO_PERIODO_DESLIGAMENTO_REINTEGRACAO_PAGAS_JUIZO' => [
            'format'       => FieldC::class,
            'position'     => 403,
            'length'       => 7,
        ],
        'RESIDENCIA_PROPRIA' => [
            'format'       => FieldC::class,
            'position'     => 410,
            'length'       => 7,
        ],
        'RESIDENTE_EXTERIOR' => [
            'format'       => FieldC::class,
            'position'     => 417,
            'length'       => 7,
        ],
        'sai_rais' => [
            'format'       => FieldC::class,
            'position'     => 424,
            'length'       => 1,
        ],
        'salario' => [
            'format'       => FieldN::class,
            'position'     => 425,
            'length'       => 17,
        ],
        'sexo' => [
            'format'       => FieldC::class,
            'position'     => 442,
            'length'       => 1,
        ],
        'simples_072007' => [
            'format'       => FieldC::class,
            'position'     => 443,
            'length'       => 3,
        ],
        'SITUACAO_QUALIFICACAO_CADASTRAL_INSS_RECEITA_FEDERAL' => [
            'format'       => FieldC::class,
            'position'     => 446,
            'length'       => 7,
        ],
        'tempermuta' => [
            'format'       => FieldC::class,
            'position'     => 453,
            'length'       => 3,
        ],
        'tipo_contrib' => [
            'format'       => FieldC::class,
            'position'     => 456,
            'length'       => 1,
        ],
        'tipo_epr' => [
            'format'       => FieldC::class,
            'position'     => 457,
            'length'       => 3,
        ],
        'TIPO_INDICATIVO_ADMISSAO' => [
            'format'       => FieldC::class,
            'position'     => 460,
            'length'       => 7,
        ],
        'TIPO_INSCRICAO_EMPRESA_ORIGEM_DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 467,
            'length'       => 7,
        ],
        'troca_aut_clas' => [
            'format'       => FieldC::class,
            'position'     => 474,
            'length'       => 3,
        ],
        'USA_SALARIO_MINIMO_ESTADUAL' => [
            'format'       => FieldC::class,
            'position'     => 477,
            'length'       => 7,
        ],
        'usa_sist' => [
            'format'       => FieldC::class,
            'position'     => 484,
            'length'       => 7,
        ],
        'venc_ferias' => [
            'format'       => FieldC::class,
            'position'     => 491,
            'length'       => 10,
        ],
        'vinculo' => [
            'format'       => FieldC::class,
            'position'     => 501,
            'length'       => 7,
        ],
    ];
}
