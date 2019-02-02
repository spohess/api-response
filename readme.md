# Gerador Response

### versão _1.0_

Esse pacote é destinado a padronização da formatação das responses das APIs da Psychemedics onde, a formatação, segue o padrão a seguir:

```
{
    success:true,
    statusCode:200,
    message:enviando dados,
    data: []
}
```

## Descrição

1. success: (Boolean)
* Indicador se a requisição efetuada foi processada com sucesso ou não;
* Padrão: true;

2. statusCode: (Integer)
* Código de status HTTP (seguindo a seguinte regra: [List of HTTP status codes](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes));
* Padrão: 200;

3. message: (String)
* Mensagem descritiva do processamento efetuado;
* Padrão: enviando dados;

4. data: (Array)
* Informações solicitadas na requisição;
* Campo obrigatório, mesmo que sendo um array vazio;

## Instalação

```
composer require psychemedics/gerador-response
```

## Exemplo

### Laravel:
```
use GeradorResponse\PsyAPI;

public function getDados(Request $request)
{

    $retorno = PsyAPI::gerar($request->all(), 'Retornando request', 200, true);

    return response()->json($retorno);
} 
```