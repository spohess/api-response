# API Response
###### v1.0.0

Pacote e padronização de response de API

```
{
    success: true,
    statusCode: 200,
    message: Requisição processada,
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
composer require spohess/api-response
```

## Exemplo

### Laravel:
```
use ApiResponse\BasicoApiResponse;

public function getDados(Request $request)
{

    $retorno = BasicoApiResponse::gerar($request->all(), 'Retornando request', 200, true);

    return response()->json($retorno, 200);
} 
```