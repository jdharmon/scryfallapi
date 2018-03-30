# Scryfall API Clients

[Scryfall](https://scryfall.com/docs/api) OpenAPI (Swagger) and clients generated from it.

This is a work in progress. Only the following APIs have been implemented:
* Sets
* Cards
* Errors

## Getting Started 
Clone this repository to use the pre-generated clients.

To build your own clients for other languages, install AutoRest via `npm` (`npm install -g autorest`) and then run:
> `autorest README.md`

You may also run AutoRest in Docker by running:
> `docker run --rm -w /var/autorest -v $(PWD):/var/autorest azuresdk/autorest`

---

## Configuration 
The following are the settings for this using this API with AutoRest

> see https://aka.ms/autorest

``` yaml 
input-file: swagger.json

csharp:
  namespace: Scryfall.API
  output-folder: CSharp
nodejs:
  output-folder: NodeJS
python:
  output-folder: Python
  
directive:
- from: swagger.json
  where: $.info.title
  set: ScryfallClient
  reason: Set friendly client class names.  
```