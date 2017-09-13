<?php

namespace Convenia\Dominio\EmployeeExport\Registries;

use Convenia\Dominio\EmployeeExport\Fields\Formats\FieldC;

/**
 * Class EmployeeRegistry.
 */
class EmployeeRegistry extends Registry
{
    protected $length = 3586;

    /**
     * @var array
     */
    protected $defaultFields = [
        'codi_emp' => [
            'format'       => FieldC::class,
            'position'     => 1,
            'length'       => 7,
        ],
        'i_empregados' => [
            'format'       => FieldC::class,
            'position'     => 8,
            'length'       => 7,
        ],
        'i_filiais' => [
            'format'       => FieldC::class,
            'position'     => 15,
            'length'       => 7,
        ],
        'i_horaemp' => [
            'format'       => FieldC::class,
            'position'     => 22,
            'length'       => 7,
        ],
        'nome' => [
            'format'   => FieldC::class,
            'position' => 29,
            'length'   => 70,
            'rules'    => [
                'required',
            ],
        ],
        'paga_contr_sind' => [
            'format'       => FieldC::class,
            'position'     => 99,
            'length'       => 1,
        ],
        'opta_fgts' => [
            'format'       => FieldC::class,
            'position'     => 100,
            'length'       => 1,
        ],
        'categoria' => [
            'format'       => FieldC::class,
            'position'     => 101,
            'length'       => 7,
        ],
        'horas_mes' => [
            'format'       => FieldC::class,
            'position'     => 108,
            'length'       => 5,
        ],
        'horas_semana' => [
            'format'       => FieldC::class,
            'position'     => 113,
            'length'       => 5,
        ],
        'horas_dia' => [
            'format'       => FieldC::class,
            'position'     => 118,
            'length'       => 5,
        ],
        'admissao' => [
            'format'       => FieldC::class,
            'position'     => 123,
            'length'       => 10,
        ],
        'salario' => [
            'format'       => FieldC::class,
            'position'     => 133,
            'length'       => 17,
        ],
        'endereco' => [
            'format'       => FieldC::class,
            'position'     => 150,
            'length'       => 40,
        ],
        'complemento' => [
            'format'       => FieldC::class,
            'position'     => 190,
            'length'       => 30,
        ],
        'cep' => [
            'format'       => FieldC::class,
            'position'     => 220,
            'length'       => 8,
        ],
        'cidade' => [
            'format'       => FieldC::class,
            'position'     => 228,
            'length'       => 25,
        ],
        'fone' => [
            'format'       => FieldC::class,
            'position'     => 253,
            'length'       => 15,
        ],
        'estado' => [
            'format'       => FieldC::class,
            'position'     => 268,
            'length'       => 2,
        ],
        'data_nascimento' => [
            'format'       => FieldC::class,
            'position'     => 270,
            'length'       => 10,
        ],
        'venc_ferias' => [
            'format'       => FieldC::class,
            'position'     => 280,
            'length'       => 10,
        ],
        'i_ccustos' => [
            'format'       => FieldC::class,
            'position'     => 290,
            'length'       => 7,
        ],
        'forma_pagto' => [
            'format'       => FieldC::class,
            'position'     => 297,
            'length'       => 1,
        ],
        'sexo' => [
            'format'       => FieldC::class,
            'position'     => 298,
            'length'       => 1,
        ],
        'local_nascimento' => [
            'format'       => FieldC::class,
            'position'     => 299,
            'length'       => 40,
        ],
        'uf_nascimento' => [
            'format'       => FieldC::class,
            'position'     => 339,
            'length'       => 2,
        ],
        'estado_civil' => [
            'format'       => FieldC::class,
            'position'     => 341,
            'length'       => 1,
        ],
        'nacionalidade' => [
            'format'       => FieldC::class,
            'position'     => 342,
            'length'       => 7,
        ],
        'ano_chegada' => [
            'format'       => FieldC::class,
            'position'     => 349,
            'length'       => 7,
        ],
        'identidade' => [
            'format'       => FieldC::class,
            'position'     => 356,
            'length'       => 15,
        ],
        'naturalizado' => [
            'format'       => FieldC::class,
            'position'     => 371,
            'length'       => 1,
        ],
        'pis' => [
            'format'       => FieldC::class,
            'position'     => 372,
            'length'       => 11,
        ],
        'cpf' => [
            'format'       => FieldC::class,
            'position'     => 383,
            'length'       => 11,
        ],
        'cart_prof' => [
            'format'       => FieldC::class,
            'position'     => 394,
            'length'       => 11,
        ],
        'serie_cart_prof' => [
            'format'       => FieldC::class,
            'position'     => 405,
            'length'       => 5,
        ],
        'opcao_fgts' => [
            'format'       => FieldC::class,
            'position'     => 410,
            'length'       => 10,
        ],
        'conta_fgts' => [
            'format'       => FieldC::class,
            'position'     => 420,
            'length'       => 12,
        ],
        'num_cart_ponto' => [
            'format'       => FieldC::class,
            'position'     => 432,
            'length'       => 12,
        ],
        'venc_exame_medico' => [
            'format'       => FieldC::class,
            'position'     => 444,
            'length'       => 10,
        ],
        'vinculo' => [
            'format'       => FieldC::class,
            'position'     => 454,
            'length'       => 7,
        ],
        'i_bancos' => [
            'format'       => FieldC::class,
            'position'     => 461,
            'length'       => 7,
        ],
        'conta_corr' => [
            'format'       => FieldC::class,
            'position'     => 468,
            'length'       => 15,
        ],
        'data_base' => [
            'format'       => FieldC::class,
            'position'     => 490,
            'length'       => 10,
        ],
        'cart_motorista' => [
            'format'       => FieldC::class,
            'position'     => 500,
            'length'       => 15,
        ],
        'categ_cart_mot' => [
            'format'       => FieldC::class,
            'position'     => 515,
            'length'       => 3,
        ],
        'venc_cart_mot' => [
            'format'       => FieldC::class,
            'position'     => 518,
            'length'       => 10,
        ],
        'data_transf' => [
            'format'       => FieldC::class,
            'position'     => 528,
            'length'       => 10,
        ],
        'sai_rais' => [
            'format'       => FieldC::class,
            'position'     => 538,
            'length'       => 1,
        ],
        'grau_instrucao' => [
            'format'       => FieldC::class,
            'position'     => 539,
            'length'       => 7,
        ],
        'i_depto' => [
            'format'       => FieldC::class,
            'position'     => 546,
            'length'       => 7,
        ],
        'emprego_ant' => [
            'format'       => FieldC::class,
            'position'     => 553,
            'length'       => 7,
        ],
        'nome_pai' => [
            'format'       => FieldC::class,
            'position'     => 560,
            'length'       => 70,
        ],
        'nome_mae' => [
            'format'       => FieldC::class,
            'position'     => 630,
            'length'       => 70,
        ],
        'uf_cart_prof' => [
            'format'       => FieldC::class,
            'position'     => 700,
            'length'       => 2,
        ],
        'i_sindicatos' => [
            'format'       => FieldC::class,
            'position'     => 702,
            'length'       => 7,
        ],
        'org_exp_ident' => [
            'format'       => FieldC::class,
            'position'     => 709,
            'length'       => 10,
        ],
        'uf_exp_ident' => [
            'format'       => FieldC::class,
            'position'     => 719,
            'length'       => 2,
        ],
        'dt_exp_ident' => [
            'format'       => FieldC::class,
            'position'     => 721,
            'length'       => 10,
        ],
        'dt_exp_cprof' => [
            'format'       => FieldC::class,
            'position'     => 731,
            'length'       => 10,
        ],
        'tipo_visto_estrangeiro' => [
            'format'       => FieldC::class,
            'position'     => 741,
            'length'       => 7,
        ],
        'validade_id_estr' => [
            'format'       => FieldC::class,
            'position'     => 748,
            'length'       => 10,
        ],
        'validade_ctrab_estr' => [
            'format'       => FieldC::class,
            'position'     => 758,
            'length'       => 10,
        ],
        'grupo_sanguineo' => [
            'format'       => FieldC::class,
            'position'     => 768,
            'length'       => 2,
        ],
        'rh_sanguineo' => [
            'format'       => FieldC::class,
            'position'     => 770,
            'length'       => 1,
        ],
        'nome_conjuge' => [
            'format'       => FieldC::class,
            'position'     => 771,
            'length'       => 40,
        ],
        'ultimo_exame_medico' => [
            'format'       => FieldC::class,
            'position'     => 811,
            'length'       => 10,
        ],
        'i_conselhos' => [
            'format'       => FieldC::class,
            'position'     => 821,
            'length'       => 7,
        ],
        'num_reg_cons_reg' => [
            'format'       => FieldC::class,
            'position'     => 828,
            'length'       => 8,
        ],
        'regiao_reg_cons_regional' => [
            'format'       => FieldC::class,
            'position'     => 836,
            'length'       => 8,
        ],
        'i_estabilidade' => [
            'format'       => FieldC::class,
            'position'     => 844,
            'length'       => 7,
        ],
        'inicio_estabilidade' => [
            'format'       => FieldC::class,
            'position'     => 851,
            'length'       => 10,
        ],
        'fim_estabilidade' => [
            'format'       => FieldC::class,
            'position'     => 861,
            'length'       => 10,
        ],
        'i_localtrab' => [
            'format'       => FieldC::class,
            'position'     => 871,
            'length'       => 7,
        ],
        'titulo_eleit' => [
            'format'       => FieldC::class,
            'position'     => 878,
            'length'       => 15,
        ],
        'zona_eleit' => [
            'format'       => FieldC::class,
            'position'     => 893,
            'length'       => 3,
        ],
        'secao_eleit' => [
            'format'       => FieldC::class,
            'position'     => 896,
            'length'       => 4,
        ],
        'dcad_pis' => [
            'format'       => FieldC::class,
            'position'     => 900,
            'length'       => 10,
        ],
        'i_servicos' => [
            'format'       => FieldC::class,
            'position'     => 910,
            'length'       => 7,
        ],
        'ini_praz_det' => [
            'format'       => FieldC::class,
            'position'     => 917,
            'length'       => 10,
        ],
        'fim_praz_det' => [
            'format'       => FieldC::class,
            'position'     => 927,
            'length'       => 10,
        ],
        'possui_vinc_out_emp' => [
            'format'       => FieldC::class,
            'position'     => 937,
            'length'       => 1,
        ],
        'empresa_outro_vinc' => [
            'format'       => FieldC::class,
            'position'     => 938,
            'length'       => 7,
        ],
        'codigo_vinc_outra_emp' => [
            'format'       => FieldC::class,
            'position'     => 945,
            'length'       => 7,
        ],
        'ult_cont_sind' => [
            'format'       => FieldC::class,
            'position'     => 952,
            'length'       => 10,
        ],
        'oco_sefip' => [
            'format'       => FieldC::class,
            'position'     => 962,
            'length'       => 7,
        ],
        'cor' => [
            'format'       => FieldC::class,
            'position'     => 969,
            'length'       => 7,
        ],
        'cart_reservista' => [
            'format'       => FieldC::class,
            'position'     => 976,
            'length'       => 12,
        ],
        'cate_reservista' => [
            'format'       => FieldC::class,
            'position'     => 988,
            'length'       => 5,
        ],
        'i_niveis' => [
            'format'       => FieldC::class,
            'position'     => 993,
            'length'       => 7,
        ],
        'i_clasniveis' => [
            'format'       => FieldC::class,
            'position'     => 1000,
            'length'       => 1,
        ],
        'i_refeniveis' => [
            'format'       => FieldC::class,
            'position'     => 1001,
            'length'       => 7,
        ],
        'matricula' => [
            'format'       => FieldC::class,
            'position'     => 1008,
            'length'       => 20,
        ],
        'deficiente_fisico' => [
            'format'       => FieldC::class,
            'position'     => 1028,
            'length'       => 3,
        ],
        'matric_inss' => [
            'format'       => FieldC::class,
            'position'     => 1031,
            'length'       => 11,
        ],
        'tipo_contrib' => [
            'format'       => FieldC::class,
            'position'     => 1042,
            'length'       => 1,
        ],
        'contrib_indiv' => [
            'format'       => FieldC::class,
            'position'     => 1043,
            'length'       => 1,
        ],
        'inicio_contribuicao' => [
            'format'       => FieldC::class,
            'position'     => 1044,
            'length'       => 10,
        ],
        'classe_atual' => [
            'format'       => FieldC::class,
            'position'     => 1054,
            'length'       => 7,
        ],
        'data_classe' => [
            'format'       => FieldC::class,
            'position'     => 1061,
            'length'       => 10,
        ],
        'troca_aut_clas' => [
            'format'       => FieldC::class,
            'position'     => 1071,
            'length'       => 3,
        ],
        'evento_prolabore' => [
            'format'       => FieldC::class,
            'position'     => 1074,
            'length'       => 7,
        ],
        'gps_trimestral' => [
            'format'       => FieldC::class,
            'position'     => 1081,
            'length'       => 3,
        ],
        'gps_deducao' => [
            'format'       => FieldC::class,
            'position'     => 1084,
            'length'       => 3,
        ],
        'i_contribuintes' => [
            'format'       => FieldC::class,
            'position'     => 1087,
            'length'       => 7,
        ],
        'tipo_epr' => [
            'format'       => FieldC::class,
            'position'     => 1094,
            'length'       => 3,
        ],
        'usa_sist' => [
            'format'       => FieldC::class,
            'position'     => 1097,
            'length'       => 7,
        ],
        'tempermuta' => [
            'format'       => FieldC::class,
            'position'     => 1104,
            'length'       => 3,
        ],
        'i_turmas' => [
            'format'       => FieldC::class,
            'position'     => 1107,
            'length'       => 7,
        ],
        'relogio1' => [
            'format'       => FieldC::class,
            'position'     => 1114,
            'length'       => 7,
        ],
        'relogio2' => [
            'format'       => FieldC::class,
            'position'     => 1121,
            'length'       => 7,
        ],
        'relogio3' => [
            'format'       => FieldC::class,
            'position'     => 1128,
            'length'       => 7,
        ],
        'relogio4' => [
            'format'       => FieldC::class,
            'position'     => 1135,
            'length'       => 7,
        ],
        'relogio5' => [
            'format'       => FieldC::class,
            'position'     => 1142,
            'length'       => 7,
        ],
        'aco_nao_aut' => [
            'format'       => FieldC::class,
            'position'     => 1149,
            'length'       => 1,
        ],
        'codigo_exportacao' => [
            'format'       => FieldC::class,
            'position'     => 1150,
            'length'       => 7,
        ],
        'transf_codi_emp' => [
            'format'       => FieldC::class,
            'position'     => 1157,
            'length'       => 7,
        ],
        'transf_i_empregados' => [
            'format'       => FieldC::class,
            'position'     => 1164,
            'length'       => 7,
        ],
        'regime_trabalho' => [
            'format'       => FieldC::class,
            'position'     => 1171,
            'length'       => 7,
        ],
        'pis_domi_banc' => [
            'format'       => FieldC::class,
            'position'     => 1178,
            'length'       => 40,
        ],
        'pis_num_banco' => [
            'format'       => FieldC::class,
            'position'     => 1218,
            'length'       => 7,
        ],
        'pis_agencia' => [
            'format'       => FieldC::class,
            'position'     => 1225,
            'length'       => 7,
        ],
        'pis_agencia_dv' => [
            'format'       => FieldC::class,
            'position'     => 1232,
            'length'       => 3,
        ],
        'pis_end_banco' => [
            'format'       => FieldC::class,
            'position'     => 1235,
            'length'       => 40,
        ],
        'autoriza_tf' => [
            'format'       => FieldC::class,
            'position'     => 1275,
            'length'       => 1,
        ],
        'tipo_valor_tf' => [
            'format'       => FieldC::class,
            'position'     => 1276,
            'length'       => 3,
        ],
        'valor_tf' => [
            'format'       => FieldC::class,
            'position'     => 1279,
            'length'       => 13,
        ],
        'data_emissao_tf' => [
            'format'       => FieldC::class,
            'position'     => 1292,
            'length'       => 10,
        ],
        'matricula_tf' => [
            'format'       => FieldC::class,
            'position'     => 1302,
            'length'       => 12,
        ],
        'bairro' => [
            'format'       => FieldC::class,
            'position'     => 1314,
            'length'       => 40,
        ],
        'sindicalizado' => [
            'format'       => FieldC::class,
            'position'     => 1354,
            'length'       => 3,
        ],
        'numero_end' => [
            'format'       => FieldC::class,
            'position'     => 1357,
            'length'       => 7,
        ],
        'imprime_recibo' => [
            'format'       => FieldC::class,
            'position'     => 1364,
            'length'       => 3,
        ],
        'origem_reg' => [
            'format'       => FieldC::class,
            'position'     => 1367,
            'length'       => 3,
        ],
        'fone2' => [
            'format'       => FieldC::class,
            'position'     => 1370,
            'length'       => 15,
        ],
        'tipo_servico' => [
            'format'       => FieldC::class,
            'position'     => 1385,
            'length'       => 1,
        ],
        'contr_exp' => [
            'format'       => FieldC::class,
            'position'     => 1386,
            'length'       => 3,
        ],
        'pro_praz_det' => [
            'format'       => FieldC::class,
            'position'     => 1389,
            'length'       => 10,
        ],
        'contr_sobre_sal_min' => [
            'format'       => FieldC::class,
            'position'     => 1399,
            'length'       => 3,
        ],
        'contr_sobre_sal_min_data' => [
            'format'       => FieldC::class,
            'position'     => 1402,
            'length'       => 10,
        ],
        'simples_072007' => [
            'format'       => FieldC::class,
            'position'     => 1412,
            'length'       => 3,
        ],
        'DATA_CALC_AFASTAMENTOS' => [
            'format'       => FieldC::class,
            'position'     => 1415,
            'length'       => 10,
        ],
        'I_AFASTAMENTOS' => [
            'format'       => FieldC::class,
            'position'     => 1425,
            'length'       => 7,
        ],
        'ALVARA_JUDICIAL' => [
            'format'       => FieldC::class,
            'position'     => 1432,
            'length'       => 7,
        ],
        'I_OPERADORAPLANOSAUDE' => [
            'format'       => FieldC::class,
            'position'     => 1439,
            'length'       => 7,
        ],
        'PLANO_SAUDE_OPTANTES' => [
            'format'       => FieldC::class,
            'position'     => 1446,
            'length'       => 7,
        ],
        'OPCAO_PLANO_SAUDE' => [
            'format'       => FieldC::class,
            'position'     => 1453,
            'length'       => 7,
        ],
        'TIPO_CLA_ASSEC_DIR_REC_RES_ANT' => [
            'format'       => FieldC::class,
            'position'     => 1460,
            'length'       => 7,
        ],
        'TIPO_CONTA' => [
            'format'       => FieldC::class,
            'position'     => 1467,
            'length'       => 7,
        ],
        'DATA_REINTEGRACAO' => [
            'format'       => FieldC::class,
            'position'     => 1474,
            'length'       => 10,
        ],
        'TIPO_INSCRICAO_FILIAL_ORIGEM' => [
            'format'       => FieldC::class,
            'position'     => 1484,
            'length'       => 7,
        ],
        'INSCRICAO_FILIAL_ORIGEM' => [
            'format'       => FieldC::class,
            'position'     => 1491,
            'length'       => 14,
        ],
        'MATRICULA_ORIGEM' => [
            'format'       => FieldC::class,
            'position'     => 1505,
            'length'       => 20,
        ],
        'NOME_EMPRESA_ORIGEM' => [
            'format'       => FieldC::class,
            'position'     => 1525,
            'length'       => 40,
        ],
        'EMAIL' => [
            'format'       => FieldC::class,
            'position'     => 1565,
            'length'       => 60,
        ],
        'NUMERO_PROCESSO_MTE' => [
            'format'       => FieldC::class,
            'position'     => 1625,
            'length'       => 30,
        ],
        'DATA_CHEGADA' => [
            'format'       => FieldC::class,
            'position'     => 1655,
            'length'       => 10,
        ],
        'DATA_NATURALIZACAO' => [
            'format'       => FieldC::class,
            'position'     => 1665,
            'length'       => 10,
        ],
        'CASADO_BRASILEIRO' => [
            'format'       => FieldC::class,
            'position'     => 1675,
            'length'       => 7,
        ],
        'FILHOS_BRASILEIRO' => [
            'format'       => FieldC::class,
            'position'     => 1682,
            'length'       => 7,
        ],
        'NIF' => [
            'format'       => FieldC::class,
            'position'     => 1689,
            'length'       => 30,
        ],
        'NUMERO_RIC' => [
            'format'       => FieldC::class,
            'position'     => 1719,
            'length'       => 15,
        ],
        'ORGAO_EMISSOR_RIC' => [
            'format'       => FieldC::class,
            'position'     => 1734,
            'length'       => 8,
        ],
        'LOCAL_RIC' => [
            'format'       => FieldC::class,
            'position'     => 1742,
            'length'       => 40,
        ],
        'DATA_EXPEDICAO_RIC' => [
            'format'       => FieldC::class,
            'position'     => 1782,
            'length'       => 10,
        ],
        'DATA_VALIDADE_RIC' => [
            'format'       => FieldC::class,
            'position'     => 1792,
            'length'       => 10,
        ],
        'DIGITO_CONTA_PAGAMENTO' => [
            'format'       => FieldC::class,
            'position'     => 1802,
            'length'       => 2,
        ],
        'RESIDENTE_EXTERIOR' => [
            'format'       => FieldC::class,
            'position'     => 1804,
            'length'       => 7,
        ],
        'TIPO_ENDERECO' => [
            'format'       => FieldC::class,
            'position'     => 1811,
            'length'       => 7,
        ],
        'MUNICIPIO_ENDERECO' => [
            'format'       => FieldC::class,
            'position'     => 1818,
            'length'       => 7,
        ],
        'MUNICIPIO_NASCIMENTO' => [
            'format'       => FieldC::class,
            'position'     => 1825,
            'length'       => 7,
        ],
        'PAIS_ENDERECO' => [
            'format'       => FieldC::class,
            'position'     => 1832,
            'length'       => 7,
        ],
        'PAIS_NASCIMENTO' => [
            'format'       => FieldC::class,
            'position'     => 1839,
            'length'       => 7,
        ],
        'BENEFICIADO_PAT' => [
            'format'       => FieldC::class,
            'position'     => 1846,
            'length'       => 7,
        ],
        'CONTR_SOBRE_SAL_MIN_TIPO' => [
            'format'       => FieldC::class,
            'position'     => 1853,
            'length'       => 7,
        ],
        'GPS_CONJUNTA_NOVEMBRO_13_INTEGRAL' => [
            'format'       => FieldC::class,
            'position'     => 1860,
            'length'       => 7,
        ],
        'GPS_CONJUNTA_NOVEMBRO_13_INTEGRAL_INICIO' => [
            'format'       => FieldC::class,
            'position'     => 1867,
            'length'       => 10,
        ],
         'BENEFICIADO_PAT_SERVICO_PROPRIO' => [
            'format'       => FieldC::class,
            'position'     => 1877,
            'length'       => 7,
        ],
         'BENEFICIADO_PAT_ADMINISTRACAO_COZINHAS' => [
            'format'       => FieldC::class,
            'position'     => 1884,
            'length'       => 7,
        ],
         'BENEFICIADO_PAT_REFEICAO_CONVENIO' => [
            'format'       => FieldC::class,
            'position'     => 1891,
            'length'       => 7,
        ],
         'BENEFICIADO_PAT_REFEICOES_TRANSPORTADAS' => [
            'format'       => FieldC::class,
            'position'     => 1898,
            'length'       => 7,
        ],
         'BENEFICIADO_PAT_CESTA_ALIMENTOS' => [
            'format'       => FieldC::class,
            'position'     => 1905,
            'length'       => 7,
        ],
         'BENEFICIADO_PAT_ALIMENTACAO_CONVENIO' => [
            'format'       => FieldC::class,
            'position'     => 1912,
            'length'       => 7,
        ],
         'ATIVIDADE_CONTA_PROPRIA_RURAL' => [
            'format'       => FieldC::class,
            'position'     => 1919,
            'length'       => 7,
        ],
         'NUMERO_PASSAPORTE' => [
            'format'       => FieldC::class,
            'position'     => 1926,
            'length'       => 20,
        ],
         'EMISSOR_PASSAPORTE' => [
            'format'       => FieldC::class,
            'position'     => 1946,
            'length'       => 7,
        ],
        'UF_PASSAPORTE' => [
            'format'       => FieldC::class,
            'position'     => 1953,
            'length'       => 2,
        ],
        'DATA_EMISSAO_PASSAPORTE' => [
            'format'       => FieldC::class,
            'position'     => 1955,
            'length'       => 10,
        ],
        'DATA_VALIDADE_PASSAPORTE' => [
            'format'       => FieldC::class,
            'position'     => 1965,
            'length'       => 10,
        ],
        'PAIS_PASSAPORTE' => [
            'format'       => FieldC::class,
            'position'     => 1975,
            'length'       => 7,
        ],
        'TIPO_INDICATIVO_ADMISSAO' => [
            'format'       => FieldC::class,
            'position'     => 1982,
            'length'       => 7,
        ],
        'NOME_MUNICIPIO_RESIDENTE_EXTERIOR' => [
            'format'       => FieldC::class,
            'position'     => 1989,
            'length'       => 255,
        ],
        'PAIS_NACIONALIDADE' => [
            'format'       => FieldC::class,
            'position'     => 2244,
            'length'       => 7,
        ],
        'DATA_EXPEDICAO_CNH' => [
            'format'       => FieldC::class,
            'position'     => 2251,
            'length'       => 10,
        ],
        'ORGAO_EMISSOR_CNH' => [
            'format'       => FieldC::class,
            'position'     => 2261,
            'length'       => 20,
        ],
        'CODIGO_POSTAL' => [
            'format'       => FieldC::class,
            'position'     => 2281,
            'length'       => 10,
        ],
        'RESIDENCIA_PROPRIA' => [
            'format'       => FieldC::class,
            'position'     => 2291,
            'length'       => 7,
        ],
        'IMOVEL_ADQUIRIDO_RECURSOS_FGTS' => [
            'format'       => FieldC::class,
            'position'     => 2298,
            'length'       => 7,
        ],
        'EMAIL_ALTERNATIVO' => [
            'format'       => FieldC::class,
            'position'     => 2305,
            'length'       => 60,
        ],
        'TIPO_PROCESSO_ALVARA' => [
            'format'       => FieldC::class,
            'position'     => 2365,
            'length'       => 7,
        ],
        'AUTORIA_ALVARA' => [
            'format'       => FieldC::class,
            'position'     => 2372,
            'length'       => 7,
        ],
        'NUMERO_ALVARA' => [
            'format'       => FieldC::class,
            'position'     => 2379,
            'length'       => 20,
        ],
        'INDICATIVO_DECISAO_ALVARA' => [
            'format'       => FieldC::class,
            'position'     => 2399,
            'length'       => 7,
        ],
        'DATA_DECISAO_ALVARA' => [
            'format'       => FieldC::class,
            'position'     => 2406,
            'length'       => 10,
        ],
        'MONTANTE_INTEGRAL_DEPOSITADO_ALVARA' => [
            'format'       => FieldC::class,
            'position'     => 2416,
            'length'       => 7,
        ],
        'INICIO_VIGENCIA_ALVARA' => [
            'format'       => FieldC::class,
            'position'     => 2423,
            'length'       => 10,
        ],
        'FIM_VIGENCIA_ALVARA' => [
            'format'       => FieldC::class,
            'position'     => 2433,
            'length'       => 10,
        ],
        'IDENTIFICACAO_ALVARA' => [
            'format'       => FieldC::class,
            'position'     => 2443,
            'length'       => 2,
        ],
        'CODIGO_MUNICIPIO_ALVARA' => [
            'format'       => FieldC::class,
            'position'     => 2445,
            'length'       => 7,
        ],
        'POSSUI_DEFICIENCIA' => [
            'format'       => FieldC::class,
            'position'     => 2452,
            'length'       => 7,
        ],
        'POSSUI_DEFICIENCIA_MOTORA' => [
            'format'       => FieldC::class,
            'position'     => 2459,
            'length'       => 7,
        ],
        'POSSUI_DEFICIENCIA_VISUAL' => [
            'format'       => FieldC::class,
            'position'     => 2466,
            'length'       => 7,
        ],
        'POSSUI_DEFICIENCIA_AUDITIVA' => [
            'format'       => FieldC::class,
            'position'     => 2473,
            'length'       => 7,
        ],
        'POSSUI_DEFICIENCIA_OUTRAS' => [
            'format'       => FieldC::class,
            'position'     => 2480,
            'length'       => 7,
        ],
        'POSSUI_DEFICIENCIA_REABILITADO' => [
            'format'       => FieldC::class,
            'position'     => 2487,
            'length'       => 7,
        ],
        'OBSERVACAO_DEFICIENCIA' => [
            'format'       => FieldC::class,
            'position'     => 2494,
            'length'       => 255,
        ],
        'I_FUNCAO' => [
            'format'       => FieldC::class,
            'position'     => 2749,
            'length'       => 7,
        ],
        'NUMERO_RNE' => [
            'format'       => FieldC::class,
            'position'     => 2756,
            'length'       => 15,
        ],
        'DATA_EXPEDICAO_RNE' => [
            'format'       => FieldC::class,
            'position'     => 2771,
            'length'       => 10,
        ],
        'ORGAO_EMISSOR_RNE' => [
            'format'       => FieldC::class,
            'position'     => 2781,
            'length'       => 20,
        ],
        'ENDERECO_COMERCIAL' => [
            'format'       => FieldC::class,
            'position'     => 2801,
            'length'       => 7,
        ],
        'I_PROCESSO' => [
            'format'       => FieldC::class,
            'position'     => 2808,
            'length'       => 7,
        ],
        'CODIGO_SCE_DOMINIO_ATENDIMENTO' => [
            'format'       => FieldC::class,
            'position'     => 2815,
            'length'       => 7,
        ],
        'I_INSTITUICAO_ENSINO' => [
            'format'       => FieldC::class,
            'position'     => 2822,
            'length'       => 7,
        ],
        'I_AGENTES_INTEGRACAO' => [
            'format'       => FieldC::class,
            'position'     => 2829,
            'length'       => 7,
        ],
        'I_COORDENADOR_ESTAGIO' => [
            'format'       => FieldC::class,
            'position'     => 2836,
            'length'       => 7,
        ],
        'AREA_ATUACAO_ESTAGIARIO' => [
            'format'       => FieldC::class,
            'position'     => 2843,
            'length'       => 50,
        ],
        'NATUREZA_ESTAGIO' => [
            'format'       => FieldC::class,
            'position'     => 2893,
            'length'       => 7,
        ],
        'NIVEL_ESTAGIO' => [
            'format'       => FieldC::class,
            'position'     => 2900,
            'length'       => 7,
        ],
        'APOLICE_SEGURO_ESTAGIARIO' => [
            'format'       => FieldC::class,
            'position'     => 2907,
            'length'       => 30,
        ],
        'POSSUI_DEFICIENCIA_MENTAL' => [
            'format'       => FieldC::class,
            'position'     => 2937,
            'length'       => 7,
        ],
        'I_JORNADA' => [
            'format'       => FieldC::class,
            'position'     => 2944,
            'length'       => 7,
        ],
        'SITUACAO_QUALIFICACAO_CADASTRAL_INSS_RECEITA' => [
            'format'       => FieldC::class,
            'position'     => 2951,
            'length'       => 7,
        ],
        'CAIXA_POSTAL' => [
            'format'       => FieldC::class,
            'position'     => 2958,
            'length'       => 10,
        ],
        'CEP_CAIXA_POSTAL' => [
            'format'       => FieldC::class,
            'position'     => 2968,
            'length'       => 8,
        ],
        'MOTIVO_CONTRATACAO_TRABALHO_TEMPORARIO' => [
            'format'       => FieldC::class,
            'position'     => 2976,
            'length'       => 7,
        ],
        'NOME_TRABALHADOR_SUBSTITUIDO_TRABALHO_TEMPORARIO' => [
            'format'       => FieldC::class,
            'position'     => 2983,
            'length'       => 100,
        ],
        'CPF_TRABALHADOR_SUBSTITUIDO_TRABALHO_TEMPORARIO' => [
            'format'       => FieldC::class,
            'position'     => 3083,
            'length'       => 11,
        ],
        'MATRICULA_TRABALHADOR_SUBSTITUIDO_TRABALHO_TEMPORARIO' => [
            'format'       => FieldC::class,
            'position'     => 3094,
            'length'       => 30,
        ],
        'TIPO_HORARIO' => [
            'format'       => FieldC::class,
            'position'     => 3124,
            'length'       => 7,
        ],
        'CODIGO_ESOCIAL' => [
            'format'       => FieldC::class,
            'position'     => 3131,
            'length'       => 30,
        ],
        'I_REMUNERACAO_VARIAVEL' => [
            'format'       => FieldC::class,
            'position'     => 3161,
            'length'       => 7,
        ],
        'I_PROCESSO_REINTEGRACAO' => [
            'format'       => FieldC::class,
            'position'     => 3168,
            'length'       => 7,
        ],
        'POSSUI_REDUCAO_ALIQUOTA_INSS' => [
            'format'       => FieldC::class,
            'position'     => 3175,
            'length'       => 7,
        ],
        'POSSUI_REDUCAO_ALIQUOTA_INSS_COMPETENCIA' => [
            'format'       => FieldC::class,
            'position'     => 3182,
            'length'       => 10,
        ],
        'QUANTIDADE_DIAS_CONTRATO_EXPERIENCIA' => [
            'format'       => FieldC::class,
            'position'     => 3192,
            'length'       => 7,
        ],
        'QUANTIDADE_DIAS_PRORROGACAO_CONTRATO_EXPERIENCIA' => [
            'format'       => FieldC::class,
            'position'     => 3199,
            'length'       => 7,
        ],
        'RECEBIA_SEGURO_DESEMPREGO' => [
            'format'       => FieldC::class,
            'position'     => 3206,
            'length'       => 7,
        ],
        'NATUREZA_TRABALHO_AUTONOMO' => [
            'format'       => FieldC::class,
            'position'     => 3213,
            'length'       => 7,
        ],
        'DDD_FONE' => [
            'format'       => FieldC::class,
            'position'     => 3220,
            'length'       => 3,
        ],
        'DDD_FONE2' => [
            'format'       => FieldC::class,
            'position'     => 3223,
            'length'       => 3,
        ],
        'DDD_CELULAR' => [
            'format'       => FieldC::class,
            'position'     => 3226,
            'length'       => 3,
        ],
        'CELULAR' => [
            'format'       => FieldC::class,
            'position'     => 3229,
            'length'       => 11,
        ],
        'DDD_CONTATO_2' => [
            'format'       => FieldC::class,
            'position'     => 3240,
            'length'       => 3,
        ],
        'CONTATO_2' => [
            'format'       => FieldC::class,
            'position'     => 3243,
            'length'       => 11,
        ],
        'INSCRICAO_MUNICIPAL_AUTONOMO' => [
            'format'       => FieldC::class,
            'position'     => 3254,
            'length'       => 20,
        ],
        'REGIME_CASAMENTO' => [
            'format'       => FieldC::class,
            'position'     => 3274,
            'length'       => 7,
        ],
        'DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 3281,
            'length'       => 7,
        ],
        'CNPJ_EMPRESA_ORIGEM_DIRIGENTE' => [
            'format'       => FieldC::class,
            'position'     => 3288,
            'length'       => 14,
        ],
        'NOME_EMPRESA_ORIGEM_DIRIGENTE' => [
            'format'       => FieldC::class,
            'position'     => 3302,
            'length'       => 100,
        ],
        'CATEGORIA_ORIGEM_DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 3402,
            'length'       => 7,
        ],
        'DATA_ADMISSAO_EMPRESA_ORIGEM_DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 3409,
            'length'       => 10,
        ],
        'MATRICULA_EMPRESA_ORIGEM_DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 3419,
            'length'       => 30,
        ],
        'RESPONSAVEL_REMUNERACAO_DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 3449,
            'length'       => 7,
        ],
        'TIPO_REMUNERACAO_DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 3456,
            'length'       => 7,
        ],
        'DATA_INICIO_PAGAMENTO_ADICIONAL_DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 3463,
            'length'       => 10,
        ],
        'REMUNERACAO_SINDICATO_DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 3473,
            'length'       => 17,
        ],
        'REMUNERACAO_EMPRESA_DIRIGENTE_SINDICAL' => [
            'format'       => FieldC::class,
            'position'     => 3490,
            'length'       => 17,
        ],
        'ORGAO_EXPEDICAO_RG' => [
            'format'       => FieldC::class,
            'position'     => 3507,
            'length'       => 7,
        ],
        'FORMA_CALCULO' => [
            'format'       => FieldC::class,
            'position'     => 3514,
            'length'       => 7,
        ],
        'USA_SALARIO_MINIMO_ESTADUAL' => [
            'format'       => FieldC::class,
            'position'     => 3521,
            'length'       => 7,
        ],
        'I_TABCALC_SALARIO_MINIMO_ESTADUAL' => [
            'format'       => FieldC::class,
            'position'     => 3528,
            'length'       => 7,
        ],
        'I_CATEGORIA_TAB_SALARIO_MINIMO_ESTADUAL' => [
            'format'       => FieldC::class,
            'position'     => 3535,
            'length'       => 7,
        ],
        'EMPRESA_ORIGEM_DESONERADA' => [
            'format'       => FieldC::class,
            'position'     => 3542,
            'length'       => 7,
        ],
        'REMUNERACOES_RESPECTIVAS_CONTRIBUICOES_REFERENTES_PERIODO_DESLIGAMENTO_REINTRAGACAO_PAGAS_JUIZO' => [
            'format'       => FieldC::class,
            'position'     => 3549,
            'length'       => 7,
        ],
        'CODIGO_MUNICIPIO_RIC' => [
            'format'       => FieldC::class,
            'position'     => 3556,
            'length'       => 7,
        ],
        'CODIGO_UF_CARTEIRA_MOTORISTA' => [
            'format'       => FieldC::class,
            'position'     => 3563,
            'length'       => 7,
        ],
        'DATA_PRIMEIRA_HABILITACAO_CARTEIRA_MOTORISTA' => [
            'format'       => FieldC::class,
            'position'     => 3570,
            'length'       => 10,
        ],
        'BRASILEIRO_NASCIDO_EXTERIOR' => [
            'format'       => FieldC::class,
            'position'     => 3580,
            'length'       => 7,
        ],
        'CALCULAR_INSS_PATRONAL' => [
            'format'       => FieldC::class,
            'position'     => 3587,
            'length'       => 7,
        ]
    ];
}
