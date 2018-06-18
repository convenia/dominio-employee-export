<?php

namespace Convenia\Dominio\EmployeeExport\Registries;

use Convenia\Dominio\EmployeeExport\Fields\Formats\FieldC;

/**
 * Class EmployeeRegistry.
 */
class EmployeeRegistry extends Registry
{
    protected $length = 609;

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
        'RECEBIA_SEGURO_DESEMPREGO' => [
            'format'   => FieldC::class,
            'position' => 192,
            'length'   => 7,
        ],
        'INCLUSAO_VALIDADA_ESOCIAL' => [
            'format'   => FieldC::class,
            'position' => 199,
            'length'   => 7,
        ],
        'TIPO_INSCRICAO_EMPRESA_ORIGEM_DIRIGENTE_SINDICAL' => [
            'format'   => FieldC::class,
            'position' => 206,
            'length'   => 7,
        ],
        'I_AFASTAMENTOS' => [
            'format'   => FieldC::class,
            'position' => 213,
            'length'   => 7,
        ],
        'salario' => [
            'format'   => FieldC::class,
            'position' => 220,
            'length'   => 17,
        ],
        'CALCULAR_INSS_PATRONAL' => [
            'format'   => FieldC::class,
            'position' => 237,
            'length'   => 7,
        ],
        'vinculo' => [
            'format'   => FieldC::class,
            'position' => 244,
            'length'   => 7,
        ],
        'ORGAO_EXPEDICAO_RG' => [
            'format'   => FieldC::class,
            'position' => 251,
            'length'   => 7,
        ],
        'INCLUSAO_VALIDADA_ESOCIAL_S_2206' => [
            'format'   => FieldC::class,
            'position' => 258,
            'length'   => 7,
        ],
        'BENEFICIADO_PAT_REFEICAO_CONVENIO' => [
            'format'   => FieldC::class,
            'position' => 265,
            'length'   => 7,
        ],
        'grau_instrucao' => [
            'format'   => FieldC::class,
            'position' => 272,
            'length'   => 7,
        ],
        'RESIDENCIA_PROPRIA' => [
            'format'   => FieldC::class,
            'position' => 279,
            'length'   => 7,
        ],
        'sexo' => [
            'format'   => FieldC::class,
            'position' => 286,
            'length'   => 1,
        ],
        'deficiente_fisico' => [
            'format'   => FieldC::class,
            'position' => 287,
            'length'   => 3,
        ],
        'ENDERECO_COMERCIAL' => [
            'format'   => FieldC::class,
            'position' => 290,
            'length'   => 7,
        ],
        'ENVIAR_ESOCIAL_S_2205' => [
            'format'   => FieldC::class,
            'position' => 297,
            'length'   => 7,
        ],
        'TIPO_INDICATIVO_ADMISSAO' => [
            'format'   => FieldC::class,
            'position' => 304,
            'length'   => 7,
        ],
        'ENVIAR_ESOCIAL_S_2206' => [
            'format'   => FieldC::class,
            'position' => 311,
            'length'   => 7,
        ],
        'oco_sefip' => [
            'format'   => FieldC::class,
            'position' => 318,
            'length'   => 7,
        ],
        'SITUACAO_QUALIFICACAO_CADASTRAL_INSS_RECEITA_FEDERAL' => [
            'format'   => FieldC::class,
            'position' => 325,
            'length'   => 7,
        ],
        'BENEFICIADO_PAT_REFEICOES_TRANSPORTADAS' => [
            'format'   => FieldC::class,
            'position' => 332,
            'length'   => 7,
        ],
        'emprego_ant' => [
            'format'   => FieldC::class,
            'position' => 339,
            'length'   => 7,
        ],
        'tempermuta' => [
            'format'   => FieldC::class,
            'position' => 346,
            'length'   => 3,
        ],
        'i_ccustos' => [
            'format'   => FieldC::class,
            'position' => 349,
            'length'   => 7,
        ],
        'DESLIGAMENTO_ENVIADO_ESOCIAL_REINTEGRACAO' => [
            'format'   => FieldC::class,
            'position' => 356,
            'length'   => 7,
        ],
        'DESLIGAMENTO_REALIZADO_MESMO_BANCO_REINTEGRACAO' => [
            'format'   => FieldC::class,
            'position' => 363,
            'length'   => 7,
        ],
        'EXCLUIR_EVENTO_S_2206_RETIFICACAO' => [
            'format'   => FieldC::class,
            'position' => 370,
            'length'   => 7,
        ],
        'USA_SALARIO_MINIMO_ESTADUAL' => [
            'format'   => FieldC::class,
            'position' => 377,
            'length'   => 7,
        ],
        'categoria' => [
            'format'   => FieldC::class,
            'position' => 384,
            'length'   => 7,
        ],
        'forma_pagto' => [
            'format'   => FieldC::class,
            'position' => 391,
            'length'   => 1,
        ],
        'BENEFICIADO_PAT_ADMINISTRACAO_COZINHAS' => [
            'format'   => FieldC::class,
            'position' => 392,
            'length'   => 7,
        ],
        'i_empregados' => [
            'format'   => FieldC::class,
            'position' => 399,
            'length'   => 7,
        ],
        'APOSENTADO' => [
            'format'   => FieldC::class,
            'position' => 406,
            'length'   => 7,
        ],
        'GERAR_RETIFICACAO_ESOCIAL_S_2206' => [
            'format'   => FieldC::class,
            'position' => 413,
            'length'   => 7,
        ],
        'CARGA_HORARIA_VARIAVEL' => [
            'format'   => FieldC::class,
            'position' => 420,
            'length'   => 7,
        ],
        'DESCONTAR_ESTOURO_RESCISAO_EMPRESA_ORIGEM' => [
            'format'   => FieldC::class,
            'position' => 427,
            'length'   => 7,
        ],
        'GERAR_RETIFICACAO_ESOCIAL' => [
            'format'   => FieldC::class,
            'position' => 434,
            'length'   => 7,
        ],
        'contr_sobre_sal_min' => [
            'format'   => FieldC::class,
            'position' => 441,
            'length'   => 3,
        ],
        'nome' => [
            'format'   => FieldC::class,
            'position' => 444,
            'length'   => 70,
        ],
        'opta_fgts' => [
            'format'   => FieldC::class,
            'position' => 514,
            'length'   => 1,
        ],
        'BENEFICIADO_PAT_CESTA_ALIMENTOS' => [
            'format'   => FieldC::class,
            'position' => 515,
            'length'   => 7,
        ],
        'RESIDENTE_EXTERIOR' => [
            'format'   => FieldC::class,
            'position' => 522,
            'length'   => 7,
        ],
        'ALVARA_JUDICIAL' => [
            'format'   => FieldC::class,
            'position' => 529,
            'length'   => 7,
        ],
        'POSSUI_REDUCAO_ALIQUOTA_INSS' => [
            'format'   => FieldC::class,
            'position' => 536,
            'length'   => 7,
        ],
        'gps_deducao' => [
            'format'   => FieldC::class,
            'position' => 543,
            'length'   => 3,
        ],
        'tipo_epr' => [
            'format'   => FieldC::class,
            'position' => 546,
            'length'   => 3,
        ],
        'troca_aut_clas' => [
            'format'   => FieldC::class,
            'position' => 549,
            'length'   => 3,
        ],
        'ENVIAR_REGISTRO_APOS_EXCLUSAO_ESOCIAL' => [
            'format'   => FieldC::class,
            'position' => 552,
            'length'   => 7,
        ],
        'BENEFICIADO_PAT_SERVICO_PROPRIO' => [
            'format'   => FieldC::class,
            'position' => 559,
            'length'   => 7,
        ],
        'possui_vinc_out_emp' => [
            'format'   => FieldC::class,
            'position' => 566,
            'length'   => 1,
        ],
        'simples_072007' => [
            'format'   => FieldC::class,
            'position' => 567,
            'length'   => 3,
        ],
        'REMUNERACAO_PERIODO_DESLIGAMENTO_REINTEGRACAO_PAGAS_JUIZO' => [
            'format'   => FieldC::class,
            'position' => 570,
            'length'   => 7,
        ],
        'horas_dia' => [
            'format'   => FieldC::class,
            'position' => 577,
            'length'   => 5,
        ],
        'TRANSFERIDO_COM_EMPREGADO_ORIGEM_VALIDADO_NO_ESOCIAL' => [
            'format'   => FieldC::class,
            'position' => 582,
            'length'   => 7,
        ],
        'COTA_DIFICIENTE' => [
            'format'   => FieldC::class,
            'position' => 589,
            'length'   => 7,
        ],
        'POSSUI_DEFICIENCIA_INTELECTUAL' => [
            'format'   => FieldC::class,
            'position' => 596,
            'length'   => 7,
        ],
        'GPS_CONJUNTA_NOVEMBRO_13_INTEGRAL' => [
            'format'   => FieldC::class,
            'position' => 603,
            'length'   => 7,
        ],
    ];
}
