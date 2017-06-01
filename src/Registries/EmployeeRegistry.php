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
        'companyCode' => [
            'format'       => FieldC::class,
            'position'     => 1,
            'length'       => 7,
        ],
        'code' => [
            'format'       => FieldC::class,
            'position'     => 8,
            'length'       => 7,
        ],
        'branchCode' => [
            'format'       => FieldC::class,
            'position'     => 15,
            'length'       => 7,
        ],
        'blank' => [
            'format'       => FieldC::class,
            'position'     => 22,
            'length'       => 7,
        ],
        'name' => [
            'format'   => FieldC::class,
            'position' => 29,
            'length'   => 70,
            'rules'    => [
                'required',
            ],
        ],
        'payContribution' => [
            'format'       => FieldC::class,
            'position'     => 99,
            'length'       => 1,
        ],
        'isFgts' => [
            'format'       => FieldC::class,
            'position'     => 100,
            'length'       => 1,
        ],
        'category' => [
            'format'       => FieldC::class,
            'position'     => 101,
            'length'       => 7,
        ],
        'monthlyHour' => [
            'format'       => FieldC::class,
            'position'     => 108,
            'length'       => 5,
        ],
        'weekHour' => [
            'format'       => FieldC::class,
            'position'     => 113,
            'length'       => 5,
        ],
        'dayHour' => [
            'format'       => FieldC::class,
            'position'     => 118,
            'length'       => 5,
        ],
        'admission' => [
            'format'       => FieldC::class,
            'position'     => 123,
            'length'       => 10,
        ],
        'salary' => [
            'format'       => FieldC::class,
            'position'     => 133,
            'length'       => 17,
        ],
        'address' => [
            'format'       => FieldC::class,
            'position'     => 150,
            'length'       => 40,
        ],
        'complement' => [
            'format'       => FieldC::class,
            'position'     => 190,
            'length'       => 30,
        ],
        'cep' => [
            'format'       => FieldC::class,
            'position'     => 220,
            'length'       => 8,
        ],
        'city' => [
            'format'       => FieldC::class,
            'position'     => 228,
            'length'       => 25,
        ],
        'phone' => [
            'format'       => FieldC::class,
            'position'     => 253,
            'length'       => 15,
        ],
        'uf' => [
            'format'       => FieldC::class,
            'position'     => 268,
            'length'       => 2,
        ],
        'birthDate' => [
            'format'       => FieldC::class,
            'position'     => 270,
            'length'       => 10,
        ],
        'vencimento das ferias' => [
            'format'       => FieldC::class,
            'position'     => 280,
            'length'       => 10,
        ],
        'costCenter' => [
            'format'       => FieldC::class,
            'position'     => 290,
            'length'       => 7,
        ],
        'Forma pagamento' => [
            'format'       => FieldC::class,
            'position'     => 297,
            'length'       => 1,
        ],
        'Sexo' => [
            'format'       => FieldC::class,
            'position'     => 298,
            'length'       => 1,
        ],
        'locate' => [
            'format'       => FieldC::class,
            'position'     => 299,
            'length'       => 40,
        ],
        'uf2' => [
            'format'       => FieldC::class,
            'position'     => 339,
            'length'       => 2,
        ],
        'Estado civil' => [
            'format'       => FieldC::class,
            'position'     => 341,
            'length'       => 1,
        ],
        'Nacionalidade' => [
            'format'       => FieldC::class,
            'position'     => 342,
            'length'       => 7,
        ],
        'blank2' => [
            'format'       => FieldC::class,
            'position'     => 349,
            'length'       => 7,
        ],
        'rg2' => [
            'format'       => FieldC::class,
            'position'     => 356,
            'length'       => 15,
        ],
        'Naturalizado' => [
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
        'ctps' => [
            'format'       => FieldC::class,
            'position'     => 394,
            'length'       => 11,
        ],
        'SerieCtps' => [
            'format'       => FieldC::class,
            'position'     => 405,
            'length'       => 5,
        ],
        'fgtsDateOption' => [
            'format'       => FieldC::class,
            'position'     => 410,
            'length'       => 10,
        ],
        'fgtsAccount' => [
            'format'       => FieldC::class,
            'position'     => 420,
            'length'       => 12,
        ],
        'pointCard' => [
            'format'       => FieldC::class,
            'position'     => 432,
            'length'       => 12,
        ],
        'Vencto.exame Med' => [
            'format'       => FieldC::class,
            'position'     => 444,
            'length'       => 10,
        ],
        'Vinculo empregaticio' => [
            'format'       => FieldC::class,
            'position'     => 454,
            'length'       => 7,
        ],
        'bank' => [
            'format'       => FieldC::class,
            'position'     => 461,
            'length'       => 7,
        ],
        'account' => [
            'format'       => FieldC::class,
            'position'     => 468,
            'length'       => 15,
        ],
        'Data Vantagem' => [
            'format'       => FieldC::class,
            'position'     => 490,
            'length'       => 10,
        ],
        'Cart.motorista' => [
            'format'       => FieldC::class,
            'position'     => 500,
            'length'       => 15,
        ],
        'category1' => [
            'format'       => FieldC::class,
            'position'     => 515,
            'length'       => 3,
        ],
        'Vencto' => [
            'format'       => FieldC::class,
            'position'     => 518,
            'length'       => 10,
        ],
        'transferDate' => [
            'format'       => FieldC::class,
            'position'     => 528,
            'length'       => 10,
        ],
        'Sai da RAIS' => [
            'format'       => FieldC::class,
            'position'     => 538,
            'length'       => 1,
        ],
        'Grau instrucao' => [
            'format'       => FieldC::class,
            'position'     => 539,
            'length'       => 7,
        ],
        'departament' => [
            'format'       => FieldC::class,
            'position'     => 546,
            'length'       => 7,
        ],
        'admissionType' => [
            'format'       => FieldC::class,
            'position'     => 553,
            'length'       => 7,
        ],
        'mothersFather' => [
            'format'       => FieldC::class,
            'position'     => 560,
            'length'       => 70,
        ],
        'mothersName' => [
            'format'       => FieldC::class,
            'position'     => 630,
            'length'       => 70,
        ],
        'uf4' => [
            'format'       => FieldC::class,
            'position'     => 700,
            'length'       => 2,
        ],
        'sindicate' => [
            'format'       => FieldC::class,
            'position'     => 702,
            'length'       => 7,
        ],
        'Orgao expedicao' => [
            'format'       => FieldC::class,
            'position'     => 709,
            'length'       => 10,
        ],
        'uf3' => [
            'format'       => FieldC::class,
            'position'     => 719,
            'length'       => 2,
        ],
        'date' => [
            'format'       => FieldC::class,
            'position'     => 721,
            'length'       => 10,
        ],
        'expeditionDate' => [
            'format'       => FieldC::class,
            'position'     => 731,
            'length'       => 10,
        ],
        'Tipo de visto de estrangeiro' => [
            'format'       => FieldC::class,
            'position'     => 741,
            'length'       => 7,
        ],
        'expirationDateRg' => [
            'format'       => FieldC::class,
            'position'     => 748,
            'length'       => 10,
        ],
        'Data de validade da carteira de trabalho' => [
            'format'       => FieldC::class,
            'position'     => 758,
            'length'       => 10,
        ],
        'Grupo sang.' => [
            'format'       => FieldC::class,
            'position'     => 768,
            'length'       => 2,
        ],
        'RH' => [
            'format'       => FieldC::class,
            'position'     => 770,
            'length'       => 1,
        ],
        'Nome do conjuge ' => [
            'format'       => FieldC::class,
            'position'     => 771,
            'length'       => 40,
        ],
        'Ult.exame Medico' => [
            'format'       => FieldC::class,
            'position'     => 811,
            'length'       => 10,
        ],
        'Conselhos' => [
            'format'       => FieldC::class,
            'position'     => 821,
            'length'       => 7,
        ],
        'No.registro cons.regional' => [
            'format'       => FieldC::class,
            'position'     => 828,
            'length'       => 8,
        ],
        'Regiao do conselho' => [
            'format'       => FieldC::class,
            'position'     => 836,
            'length'       => 8,
        ],
        'Estabilidade' => [
            'format'       => FieldC::class,
            'position'     => 844,
            'length'       => 7,
        ],
        'Inicio estabilidade' => [
            'format'       => FieldC::class,
            'position'     => 851,
            'length'       => 10,
        ],
        'Fim estabilidade' => [
            'format'       => FieldC::class,
            'position'     => 861,
            'length'       => 10,
        ],
        'Local trabalho' => [
            'format'       => FieldC::class,
            'position'     => 871,
            'length'       => 7,
        ],
        'Titulo eleitoral' => [
            'format'       => FieldC::class,
            'position'     => 878,
            'length'       => 15,
        ],
        'Zona eleitoral' => [
            'format'       => FieldC::class,
            'position'     => 893,
            'length'       => 3,
        ],
        'Secao' => [
            'format'       => FieldC::class,
            'position'     => 896,
            'length'       => 4,
        ],
        'Data de cad.PIS' => [
            'format'       => FieldC::class,
            'position'     => 900,
            'length'       => 10,
        ],
        'Servico' => [
            'format'       => FieldC::class,
            'position'     => 910,
            'length'       => 7,
        ],
        'Inicio prazo determinado' => [
            'format'       => FieldC::class,
            'position'     => 917,
            'length'       => 10,
        ],
        'Fim prazo determinado' => [
            'format'       => FieldC::class,
            'position'     => 927,
            'length'       => 10,
        ],
        'Multiplos vinculos' => [
            'format'       => FieldC::class,
            'position'     => 937,
            'length'       => 1,
        ],
        'Vinculo outra empresa ' => [
            'format'       => FieldC::class,
            'position'     => 938,
            'length'       => 7,
        ],
        'Cod.vinculo outra empresa (sem uso)' => [
            'format'       => FieldC::class,
            'position'     => 945,
            'length'       => 7,
        ],
        'Data da ultima contribuicao sindical' => [
            'format'       => FieldC::class,
            'position'     => 952,
            'length'       => 10,
        ],
        'Ocorrencia SEFIP' => [
            'format'       => FieldC::class,
            'position'     => 962,
            'length'       => 7,
        ],
        'Raca/Cor ' => [
            'format'       => FieldC::class,
            'position'     => 969,
            'length'       => 7,
        ],
        'Cart.reserv.' => [
            'format'       => FieldC::class,
            'position'     => 976,
            'length'       => 12,
        ],
        'Cat.' => [
            'format'       => FieldC::class,
            'position'     => 988,
            'length'       => 5,
        ],
        'Codigo Nivel ' => [
            'format'       => FieldC::class,
            'position'     => 993,
            'length'       => 7,
        ],
        'Classe Nivel' => [
            'format'       => FieldC::class,
            'position'     => 1000,
            'length'       => 1,
        ],
        'Referencia Nivel' => [
            'format'       => FieldC::class,
            'position'     => 1001,
            'length'       => 7,
        ],
        'Matricula' => [
            'format'       => FieldC::class,
            'position'     => 1008,
            'length'       => 20,
        ],
        'Deficiente fisico' => [
            'format'       => FieldC::class,
            'position'     => 1028,
            'length'       => 3,
        ],
        'Matricula INSS' => [
            'format'       => FieldC::class,
            'position'     => 1031,
            'length'       => 11,
        ],
        'tipo_contrib ' => [
            'format'       => FieldC::class,
            'position'     => 1042,
            'length'       => 1,
        ],
        'Contribuinte individual' => [
            'format'       => FieldC::class,
            'position'     => 1043,
            'length'       => 1,
        ],
        'Inicio contribuicao ' => [
            'format'       => FieldC::class,
            'position'     => 1044,
            'length'       => 10,
        ],
        'Classe de contribuicao' => [
            'format'       => FieldC::class,
            'position'     => 1054,
            'length'       => 7,
        ],
        'Inicio de contribuicao na classe' => [
            'format'       => FieldC::class,
            'position'     => 1061,
            'length'       => 10,
        ],
        'Troca automatica de classe' => [
            'format'       => FieldC::class,
            'position'     => 1071,
            'length'       => 3,
        ],
        'Evento' => [
            'format'       => FieldC::class,
            'position'     => 1074,
            'length'       => 7,
        ],
        'GPS Trimestral' => [
            'format'       => FieldC::class,
            'position'     => 1081,
            'length'       => 3,
        ],
        'Deducao na GPS ' => [
            'format'       => FieldC::class,
            'position'     => 1084,
            'length'       => 3,
        ],
        'Codigo2' => [
            'format'       => FieldC::class,
            'position'     => 1087,
            'length'       => 7,
        ],
        'tipo' => [
            'format'       => FieldC::class,
            'position'     => 1094,
            'length'       => 3,
        ],
        'sistemas' => [
            'format'       => FieldC::class,
            'position'     => 1097,
            'length'       => 7,
        ],
        'Permura de turma ' => [
            'format'       => FieldC::class,
            'position'     => 1104,
            'length'       => 3,
        ],
        'Turma' => [
            'format'       => FieldC::class,
            'position'     => 1107,
            'length'       => 7,
        ],
        'Codigo relogio1' => [
            'format'       => FieldC::class,
            'position'     => 1114,
            'length'       => 7,
        ],
        'Codigo relogio2' => [
            'format'       => FieldC::class,
            'position'     => 1121,
            'length'       => 7,
        ],
        'Codigo relogio3' => [
            'format'       => FieldC::class,
            'position'     => 1128,
            'length'       => 7,
        ],
        'Codigo relogio4' => [
            'format'       => FieldC::class,
            'position'     => 1135,
            'length'       => 7,
        ],
        'Codigo relogio5' => [
            'format'       => FieldC::class,
            'position'     => 1142,
            'length'       => 7,
        ],
        'bater em um relogio nao autorizado' => [
            'format'       => FieldC::class,
            'position'     => 1149,
            'length'       => 1,
        ],
        'Codigo exportacao para folha' => [
            'format'       => FieldC::class,
            'position'     => 1150,
            'length'       => 7,
        ],
        'Codigo' => [
            'format'       => FieldC::class,
            'position'     => 1157,
            'length'       => 7,
        ],
        'Empregado' => [
            'format'       => FieldC::class,
            'position'     => 1164,
            'length'       => 7,
        ],
        'blank1' => [
            'format'       => FieldC::class,
            'position'     => 1171,
            'length'       => 7,
        ],
        'Domicilio bancario' => [
            'format'       => FieldC::class,
            'position'     => 1178,
            'length'       => 40,
        ],
        'Numero banco' => [
            'format'       => FieldC::class,
            'position'     => 1218,
            'length'       => 7,
        ],
        'Agencia PIS ' => [
            'format'       => FieldC::class,
            'position'     => 1225,
            'length'       => 7,
        ],
        'PIS Digito' => [
            'format'       => FieldC::class,
            'position'     => 1232,
            'length'       => 3,
        ],
        'Endereco banco ' => [
            'format'       => FieldC::class,
            'position'     => 1235,
            'length'       => 40,
        ],
        'Autorizacao' => [
            'format'       => FieldC::class,
            'position'     => 1275,
            'length'       => 1,
        ],
        'Tipo do valor' => [
            'format'       => FieldC::class,
            'position'     => 1276,
            'length'       => 3,
        ],
        'Valor Ticket Farma ' => [
            'format'       => FieldC::class,
            'position'     => 1279,
            'length'       => 13,
        ],
        'Data emissao Ticket farma' => [
            'format'       => FieldC::class,
            'position'     => 1292,
            'length'       => 10,
        ],
        'Matricula2' => [
            'format'       => FieldC::class,
            'position'     => 1302,
            'length'       => 12,
        ],
        'Bairro' => [
            'format'       => FieldC::class,
            'position'     => 1314,
            'length'       => 40,
        ],
        'Sindicalizado' => [
            'format'       => FieldC::class,
            'position'     => 1354,
            'length'       => 3,
        ],
        'No.' => [
            'format'       => FieldC::class,
            'position'     => 1357,
            'length'       => 7,
        ],
        'Emitir Recibo' => [
            'format'       => FieldC::class,
            'position'     => 1364,
            'length'       => 3,
        ],
        'Origem do registro' => [
            'format'       => FieldC::class,
            'position'     => 1367,
            'length'       => 3,
        ],
        'Telefone 2' => [
            'format'       => FieldC::class,
            'position'     => 1370,
            'length'       => 15,
        ],
        'Tipo de servico para deducao do IRRF ' => [
            'format'       => FieldC::class,
            'position'     => 1385,
            'length'       => 1,
        ],
        'Contrato de Experiencia' => [
            'format'       => FieldC::class,
            'position'     => 1386,
            'length'       => 3,
        ],
        'Prorrogacao do prazo determinado' => [
            'format'       => FieldC::class,
            'position'     => 1389,
            'length'       => 10,
        ],
        'Calcular contribuicao fixa sobre 1 salario mÌnimo:' => [
            'format'       => FieldC::class,
            'position'     => 1399,
            'length'       => 3,
        ],
        ' InÌcio do calculo da contribuicao fixa sobre 1 salario mÌnimo' => [
            'format'       => FieldC::class,
            'position'     => 1402,
            'length'       => 10,
        ],
        'Atividade para o simples nacional' => [
            'format'       => FieldC::class,
            'position'     => 1412,
            'length'       => 3,
        ],
        ' DATA PARA CALCULAR OS AFASTAMENTOS POR COMPETENCIA' => [
            'format'       => FieldC::class,
            'position'     => 1415,
            'length'       => 10,
        ],
        'CODIGO DO AFASTAMENTO DA ULTIMA SITUACAO DO EMPREGADO' => [
            'format'       => FieldC::class,
            'position'     => 1425,
            'length'       => 7,
        ],
        'ALVARA JUDICIAL USADO NA RAIS PARA CELETISTAS MENORES DE 16 ANOS' => [
            'format'       => FieldC::class,
            'position'     => 1432,
            'length'       => 7,
        ],
        '** SEM USO ** Codigo da operadora de plano de saude ' => [
            'format'       => FieldC::class,
            'position'     => 1439,
            'length'       => 7,
        ],
        '** SEM USO ** Optante plano de saude: ' => [
            'format'       => FieldC::class,
            'position'     => 1446,
            'length'       => 7,
        ],
        'Optante plano de saude' => [
            'format'       => FieldC::class,
            'position'     => 1453,
            'length'       => 7,
        ],
        'Clausula assecuratoria de direito recÌproco de rescisao antecipada' => [
            'format'       => FieldC::class,
            'position'     => 1460,
            'length'       => 7,
        ],
        ' Tipo de Conta:' => [
            'format'       => FieldC::class,
            'position'     => 1467,
            'length'       => 7,
        ],
        'Data de reintegracao ' => [
            'format'       => FieldC::class,
            'position'     => 1474,
            'length'       => 10,
        ],
        'Tipo de inscricao da filial de origem:' => [
            'format'       => FieldC::class,
            'position'     => 1484,
            'length'       => 7,
        ],
        'Inscricao da filial de origem' => [
            'format'       => FieldC::class,
            'position'     => 1491,
            'length'       => 14,
        ],
        'MatrÌcula na empresa origem' => [
            'format'       => FieldC::class,
            'position'     => 1505,
            'length'       => 20,
        ],
        'Nome da empresa de origem' => [
            'format'       => FieldC::class,
            'position'     => 1525,
            'length'       => 40,
        ],
        'E-mail' => [
            'format'       => FieldC::class,
            'position'     => 1565,
            'length'       => 60,
        ],
        'Numero processo MTE ' => [
            'format'       => FieldC::class,
            'position'     => 1625,
            'length'       => 30,
        ],
        'Data da chegada' => [
            'format'       => FieldC::class,
            'position'     => 1655,
            'length'       => 10,
        ],
        'Data da naturalizacao' => [
            'format'       => FieldC::class,
            'position'     => 1665,
            'length'       => 10,
        ],
        'Casado com brasileiro' => [
            'format'       => FieldC::class,
            'position'     => 1675,
            'length'       => 7,
        ],
        'Filhos com brasileiro' => [
            'format'       => FieldC::class,
            'position'     => 1682,
            'length'       => 7,
        ],
        'Numero de identificacao fiscal ' => [
            'format'       => FieldC::class,
            'position'     => 1689,
            'length'       => 30,
        ],
        'Numero RIC ' => [
            'format'       => FieldC::class,
            'position'     => 1719,
            'length'       => 15,
        ],
        'Orgao emissor RIC ' => [
            'format'       => FieldC::class,
            'position'     => 1734,
            'length'       => 8,
        ],
        'Local RIC ' => [
            'format'       => FieldC::class,
            'position'     => 1742,
            'length'       => 40,
        ],
        'Data expedicao RIC' => [
            'format'       => FieldC::class,
            'position'     => 1782,
            'length'       => 10,
        ],
        'Data validade RIC' => [
            'format'       => FieldC::class,
            'position'     => 1792,
            'length'       => 10,
        ],
        'DÌgito da conta de pagamento ' => [
            'format'       => FieldC::class,
            'position'     => 1802,
            'length'       => 2,
        ],
        'Residente ou domiciliado no exterior:' => [
            'format'       => FieldC::class,
            'position'     => 1804,
            'length'       => 7,
        ],
        'Tipo de endereco' => [
            'format'       => FieldC::class,
            'position'     => 1811,
            'length'       => 7,
        ],
        ' Codigo do municÌpio do endereco' => [
            'format'       => FieldC::class,
            'position'     => 1818,
            'length'       => 7,
        ],
        'Codigo do municÌpio do local de nascimento' => [
            'format'       => FieldC::class,
            'position'     => 1825,
            'length'       => 7,
        ],
        'Codigo do paÌs do endereco' => [
            'format'       => FieldC::class,
            'position'     => 1832,
            'length'       => 7,
        ],
        'Codigo do paÌs de nascimento' => [
            'format'       => FieldC::class,
            'position'     => 1839,
            'length'       => 7,
        ],
        'Beneficiado pelo PAT: ' => [
            'format'       => FieldC::class,
            'position'     => 1846,
            'length'       => 7,
        ],
        'Tipo de calculo da contribuicao fixa sobre 1 salario mÌnimo:' => [
            'format'       => FieldC::class,
            'position'     => 1853,
            'length'       => 7,
        ],
        'Recolher a competencia de novembro e 13º integral em uma unica GPS' => [
            'format'       => FieldC::class,
            'position'     => 1860,
            'length'       => 7,
        ],
        'InÌcio do recolhimento da competencia de novembro e 13º integral em uma unica GPS.' => [
            'format'       => FieldC::class,
            'position'     => 1867,
            'length'       => 10,
        ],
         'Beneficiado pelo PAT por servico proprio.' => [
            'format'       => FieldC::class,
            'position'     => 1877,
            'length'       => 7,
        ],
         'Beneficiado pelo PAT por administracao de cozinhas.' => [
            'format'       => FieldC::class,
            'position'     => 1884,
            'length'       => 7,
        ],
         'Beneficiado pelo PAT por convenio de refeicao.' => [
            'format'       => FieldC::class,
            'position'     => 1891,
            'length'       => 7,
        ],
         'Beneficiado pelo PAT por transporte de refeicao.' => [
            'format'       => FieldC::class,
            'position'     => 1898,
            'length'       => 7,
        ],
         'Beneficiado pelo PAT por cesta de alimentos.' => [
            'format'       => FieldC::class,
            'position'     => 1905,
            'length'       => 7,
        ],
         'Beneficiado pelo PAT por convenio de alimentacao.' => [
            'format'       => FieldC::class,
            'position'     => 1912,
            'length'       => 7,
        ],
         'Atividade por conta propria ' => [
            'format'       => FieldC::class,
            'position'     => 1919,
            'length'       => 7,
        ],
         'Numero do passaporte.' => [
            'format'       => FieldC::class,
            'position'     => 1926,
            'length'       => 20,
        ],
         'Emissor do passaporte' => [
            'format'       => FieldC::class,
            'position'     => 1946,
            'length'       => 7,
        ],
        'UF do passaporte' => [
            'format'       => FieldC::class,
            'position'     => 1953,
            'length'       => 2,
        ],
        'Data de emissao do passaporte' => [
            'format'       => FieldC::class,
            'position'     => 1955,
            'length'       => 10,
        ],
        'Data de validade do passaporte' => [
            'format'       => FieldC::class,
            'position'     => 1965,
            'length'       => 10,
        ],
        'Codigo do paÌs do passaporte' => [
            'format'       => FieldC::class,
            'position'     => 1975,
            'length'       => 7,
        ],
        'Tipo de indicativo da admissao' => [
            'format'       => FieldC::class,
            'position'     => 1982,
            'length'       => 7,
        ],
        'Nome do municÌpio para residente no exterior' => [
            'format'       => FieldC::class,
            'position'     => 1989,
            'length'       => 255,
        ],
        'Codigo do paÌs da nacionalidade' => [
            'format'       => FieldC::class,
            'position'     => 2244,
            'length'       => 7,
        ],
        'Data de expedicao da carteira de motorista.' => [
            'format'       => FieldC::class,
            'position'     => 2251,
            'length'       => 10,
        ],
        'Orgao emissor da carteira de motorista' => [
            'format'       => FieldC::class,
            'position'     => 2261,
            'length'       => 20,
        ],
        'Codigo postal' => [
            'format'       => FieldC::class,
            'position'     => 2281,
            'length'       => 10,
        ],
        'Possui residencia propria' => [
            'format'       => FieldC::class,
            'position'     => 2291,
            'length'       => 7,
        ],
        'Adquiriu imovel com recursos do FGTS' => [
            'format'       => FieldC::class,
            'position'     => 2298,
            'length'       => 7,
        ],
        'E-mail alternativo' => [
            'format'       => FieldC::class,
            'position'     => 2305,
            'length'       => 60,
        ],
        'Tipo de processo do alvar' => [
            'format'       => FieldC::class,
            'position'     => 2365,
            'length'       => 7,
        ],
        'Autoria do alvar' => [
            'format'       => FieldC::class,
            'position'     => 2372,
            'length'       => 7,
        ],
        'Numero do alvar' => [
            'format'       => FieldC::class,
            'position'     => 2379,
            'length'       => 20,
        ],
        'Indicativo de decisao do alvar' => [
            'format'       => FieldC::class,
            'position'     => 2399,
            'length'       => 7,
        ],
        'Data de decisao do alvar' => [
            'format'       => FieldC::class,
            'position'     => 2406,
            'length'       => 10,
        ],
        'Montante integral do alvar' => [
            'format'       => FieldC::class,
            'position'     => 2416,
            'length'       => 7,
        ],
        'InicÌo da vigencia do alvar' => [
            'format'       => FieldC::class,
            'position'     => 2423,
            'length'       => 10,
        ],
        'Fim da vigencia do alvar' => [
            'format'       => FieldC::class,
            'position'     => 2433,
            'length'       => 10,
        ],
        'Identificacao do alvara' => [
            'format'       => FieldC::class,
            'position'     => 2443,
            'length'       => 2,
        ],
        'Codigo do municÌpio do alvar' => [
            'format'       => FieldC::class,
            'position'     => 2445,
            'length'       => 7,
        ],
        'Possui deficiencia.' => [
            'format'       => FieldC::class,
            'position'     => 2452,
            'length'       => 7,
        ],
        'Possui deficiencia motora' => [
            'format'       => FieldC::class,
            'position'     => 2459,
            'length'       => 7,
        ],
        'Possui deficiencia visual' => [
            'format'       => FieldC::class,
            'position'     => 2466,
            'length'       => 7,
        ],
        'Possui deficiencia auditiva' => [
            'format'       => FieldC::class,
            'position'     => 2473,
            'length'       => 7,
        ],
        'Possui outras deficiencias' => [
            'format'       => FieldC::class,
            'position'     => 2480,
            'length'       => 7,
        ],
        'Possui deficiencia reabilitado' => [
            'format'       => FieldC::class,
            'position'     => 2487,
            'length'       => 7,
        ],
        'Observacao sobre a deficiencia.' => [
            'format'       => FieldC::class,
            'position'     => 2494,
            'length'       => 255,
        ],
        'Codigo da funcao' => [
            'format'       => FieldC::class,
            'position'     => 2749,
            'length'       => 7,
        ],
        'Numero do registro nacional de estrangeiros.' => [
            'format'       => FieldC::class,
            'position'     => 2756,
            'length'       => 15,
        ],
        'Data de expedicao do registro nacional de estrangeiros' => [
            'format'       => FieldC::class,
            'position'     => 2771,
            'length'       => 10,
        ],
        'Orgao emissor do registro nacional de estrangeiros.' => [
            'format'       => FieldC::class,
            'position'     => 2781,
            'length'       => 20,
        ],
        'Endereco comercial' => [
            'format'       => FieldC::class,
            'position'     => 2801,
            'length'       => 7,
        ],
        'Codigo do processo.' => [
            'format'       => FieldC::class,
            'position'     => 2808,
            'length'       => 7,
        ],
        'Codigo da solicitacao de cadastro de empregado do DomÌnio Atendimento.' => [
            'format'       => FieldC::class,
            'position'     => 2815,
            'length'       => 7,
        ],
        'Codigo da instituicao de ensino do estagiario' => [
            'format'       => FieldC::class,
            'position'     => 2822,
            'length'       => 7,
        ],
        'Codigo do agente de integracao do estagiario' => [
            'format'       => FieldC::class,
            'position'     => 2829,
            'length'       => 7,
        ],
        'Codigo do coordenador de estagio do estagiario' => [
            'format'       => FieldC::class,
            'position'     => 2836,
            'length'       => 7,
        ],
        '£rea de atuacao do estagiario.' => [
            'format'       => FieldC::class,
            'position'     => 2843,
            'length'       => 50,
        ],
        'Natureza do estagio' => [
            'format'       => FieldC::class,
            'position'     => 2893,
            'length'       => 7,
        ],
        'NÌvel do estagio' => [
            'format'       => FieldC::class,
            'position'     => 2900,
            'length'       => 7,
        ],
        'Apolice de seguro do estagiario.' => [
            'format'       => FieldC::class,
            'position'     => 2907,
            'length'       => 30,
        ],
        'Possui deficiencia mental.' => [
            'format'       => FieldC::class,
            'position'     => 2937,
            'length'       => 7,
        ],
        'Codigo da jornada.' => [
            'format'       => FieldC::class,
            'position'     => 2944,
            'length'       => 7,
        ],
        'Situacao da qualificacao cadastral para o INSS e a Receita Federal' => [
            'format'       => FieldC::class,
            'position'     => 2951,
            'length'       => 7,
        ],
        'Caixa postal.' => [
            'format'       => FieldC::class,
            'position'     => 2958,
            'length'       => 10,
        ],
        'CEP da caixa postal.' => [
            'format'       => FieldC::class,
            'position'     => 2968,
            'length'       => 8,
        ],
        '** SEM USO ** (MOTIVO_CONTRATACAO_TRABALHO_TEMPORARIO)' => [
            'format'       => FieldC::class,
            'position'     => 2976,
            'length'       => 7,
        ],
        '* SEM USO ** (NOME_TRABALHADOR_SUBSTITUIDO_TRABALHO_TEMPORARIO)' => [
            'format'       => FieldC::class,
            'position'     => 2983,
            'length'       => 100,
        ],
        '** SEM USO ** (CPF_TRABALHADOR_SUBSTITUIDO_TRABALHO_TEMPORARIO)' => [
            'format'       => FieldC::class,
            'position'     => 3083,
            'length'       => 11,
        ],
        '** SEM USO ** (MATRICULA_TRABALHADOR_SUBSTITUIDO_TRABALHO_TEMPORARIO)' => [
            'format'       => FieldC::class,
            'position'     => 3094,
            'length'       => 30,
        ],
        'Tipo de horario.' => [
            'format'       => FieldC::class,
            'position'     => 3124,
            'length'       => 7,
        ],
        'Codigo no eSocial' => [
            'format'       => FieldC::class,
            'position'     => 3131,
            'length'       => 30,
        ],
        'Codigo da remuneracao variavel' => [
            'format'       => FieldC::class,
            'position'     => 3161,
            'length'       => 7,
        ],
        'Codigo do processo administrativo/judicial de reintegracao.' => [
            'format'       => FieldC::class,
            'position'     => 3168,
            'length'       => 7,
        ],
        'Possui reducao na alÌquota de INSS.' => [
            'format'       => FieldC::class,
            'position'     => 3175,
            'length'       => 7,
        ],
        'Competencia da reducao na alÌquota de INSS' => [
            'format'       => FieldC::class,
            'position'     => 3182,
            'length'       => 10,
        ],
        'Quantidade de dias do contrato de experiencia.' => [
            'format'       => FieldC::class,
            'position'     => 3192,
            'length'       => 7,
        ],
        'Quantidade de dias da prorrogacao do contrato de experiencia.' => [
            'format'       => FieldC::class,
            'position'     => 3199,
            'length'       => 7,
        ],
        'Recebia seguro desemprego.' => [
            'format'       => FieldC::class,
            'position'     => 3206,
            'length'       => 7,
        ],
        'Natureza trabalho autonomo' => [
            'format'       => FieldC::class,
            'position'     => 3213,
            'length'       => 7,
        ],
        'DDD do telefone 1.' => [
            'format'       => FieldC::class,
            'position'     => 3220,
            'length'       => 3,
        ],
        'DDD do contato 1' => [
            'format'       => FieldC::class,
            'position'     => 3223,
            'length'       => 3,
        ],
        'DDD do celular' => [
            'format'       => FieldC::class,
            'position'     => 3226,
            'length'       => 3,
        ],
        'Numero do celular' => [
            'format'       => FieldC::class,
            'position'     => 3229,
            'length'       => 11,
        ],
        'DDD do contato 2' => [
            'format'       => FieldC::class,
            'position'     => 3240,
            'length'       => 3,
        ],
        'Numero do contato 2' => [
            'format'       => FieldC::class,
            'position'     => 3243,
            'length'       => 11,
        ],
        'Inscricao municipal de autonomo' => [
            'format'       => FieldC::class,
            'position'     => 3254,
            'length'       => 20,
        ],
        'Regime de casamento.' => [
            'format'       => FieldC::class,
            'position'     => 3274,
            'length'       => 7,
        ],
        'Dirigente sindical.' => [
            'format'       => FieldC::class,
            'position'     => 3281,
            'length'       => 7,
        ],
        'CNPJ da empresa origem do dirigente sindical.' => [
            'format'       => FieldC::class,
            'position'     => 3288,
            'length'       => 14,
        ],
        'Nome da empresa origem do dirigente sindical' => [
            'format'       => FieldC::class,
            'position'     => 3302,
            'length'       => 100,
        ],
        'Categoria origem do dirigente sindical' => [
            'format'       => FieldC::class,
            'position'     => 3402,
            'length'       => 7,
        ],
        'Data de admissao na empresa origem do dirigente sindical.' => [
            'format'       => FieldC::class,
            'position'     => 3409,
            'length'       => 10,
        ],
        'MatrÌcula na empresa origem do dirigente sindical' => [
            'format'       => FieldC::class,
            'position'     => 3419,
            'length'       => 30,
        ],
        'Responsavel pela remuneracao do dirigente sindical.' => [
            'format'       => FieldC::class,
            'position'     => 3449,
            'length'       => 7,
        ],
        'Tipo de remuneracao do dirigente sindical' => [
            'format'       => FieldC::class,
            'position'     => 3456,
            'length'       => 7,
        ],
        'Data de inÌcio do pagamento do adicional para o dirigente sindical.' => [
            'format'       => FieldC::class,
            'position'     => 3463,
            'length'       => 10,
        ],
        'Remuneracao do sindicato do dirigente sindical.' => [
            'format'       => FieldC::class,
            'position'     => 3473,
            'length'       => 17,
        ],
        'Remuneracao da empresa do dirigente sindical.' => [
            'format'       => FieldC::class,
            'position'     => 3490,
            'length'       => 17,
        ],
        'Orgao de expedicao da RG' => [
            'format'       => FieldC::class,
            'position'     => 3507,
            'length'       => 7,
        ],
        'Forma de pagamento' => [
            'format'       => FieldC::class,
            'position'     => 3514,
            'length'       => 7,
        ],
        'Usa salario mÌnimo estadual.' => [
            'format'       => FieldC::class,
            'position'     => 3521,
            'length'       => 7,
        ],
        'Codigo sequencial da tabela de salario mÌnimo estadual.' => [
            'format'       => FieldC::class,
            'position'     => 3528,
            'length'       => 7,
        ],
        'Codigo da categoria da tabela de salario mÌnimo estadual.' => [
            'format'       => FieldC::class,
            'position'     => 3535,
            'length'       => 7,
        ],
        'Empresa origem desonerada.' => [
            'format'       => FieldC::class,
            'position'     => 3542,
            'length'       => 7,
        ],
        'Remuneracoes e respectivas contribuicoes referentes ao periodo entre o desligamento e a reintegraÃßÃ£o pagas em juizo.' => [
            'format'       => FieldC::class,
            'position'     => 3549,
            'length'       => 7,
        ],
        'Codigo do municÌpio do RIC.' => [
            'format'       => FieldC::class,
            'position'     => 3556,
            'length'       => 7,
        ],
        'UF da carteira de motorista.' => [
            'format'       => FieldC::class,
            'position'     => 3563,
            'length'       => 7,
        ],
        'Data da primeira habilitacao.' => [
            'format'       => FieldC::class,
            'position'     => 3570,
            'length'       => 10,
        ],
        'Brasileiro nascido no exterior.' => [
            'format'       => FieldC::class,
            'position'     => 3580,
            'length'       => 7,
        ],
        'Calcular INSS Patronal.' => [
            'format'       => FieldC::class,
            'position'     => 3587,
            'length'       => 7,
        ]
    ];
}
