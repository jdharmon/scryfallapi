# Scryfall API Clients

OpenAPI (Swagger) definition for [Scryfall](https://scryfall.com/docs/api), a Magic: The Gathering search engine.

## Pre-generated clients

You mad add these clients as submodules to your own code.

* [C#](https://github.com/jdharmon/scryfallapi-csharp)
* [Go](https://github.com/jdharmon/scryfallapi-go)
* [Java](https://github.com/jdharmon/scryfallapi-java)
* [Node.js](https://github.com/jdharmon/scryfallapi-nodejs)
* [PHP](https://github.com/jdharmon/scryfallapi-php)
* [Python](https://github.com/jdharmon/scryfallapi-python)
* [Ruby](https://github.com/jdharmon/scryfallapi-ruby)
* [TypeScript](https://github.com/jdharmon/scryfallapi-typescript)

## Generating Clients

To generate your own clients

1. Install AutoRest via `npm` (`npm install -g autorest`)
2. Run:

```sh
autorest README.md
```

You may also run AutoRest in Docker by running:

```sh
docker run --rm -w /var/autorest -v ${PWD}:/var/autorest azuresdk/autorest
```

---

## Configuration 
The following are the settings for this using this API with AutoRest

> see https://aka.ms/autorest

``` yaml 
input-file: swagger.yaml
namespace: scryfall

csharp:
  namespace: Scryfall.API
  output-folder: CSharp
go:
  output-folder: Go
java:
  namespace: com.scryfall.api
  output-folder: Java
nodejs:
  output-folder: NodeJS
typescript:
  output-folder: TypeScript
python:
  output-folder: Python
ruby:
  output-folder: Ruby
php:
  output-folder: PHP
  
directive:
- from: swagger-document
  where: $.info.title
  set: ScryfallClient
  reason: Set friendly client class names.    
```
