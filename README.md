# Scryfall API Clients

OpenAPI (Swagger) and clients for [Scryfall](https://scryfall.com/docs/api), a Magic: The Gathering search engine.

## Getting Started 
Clone this repository to use the pre-generated clients.

### C# (.NET Core)

1. Create a folder for your project

        mkdir MyProject
        cd MyProject

2. Copy the CSharp folder from this repository to your project directory.

3. Create the project, and add dependencies

        dotnet new console
        dotnet add package Microsoft.Rest.ClientRuntime --version 2.3.11
        
4. Open Program.cs, and add

        using Scryfall.API;

5. Instantiate and use ScryfallClient:

        static void Main(string[] args)
        {
            // Instiantiate new Scryfall client
            var scryfall = new ScryfallClient();

            // Get a random card
            var card = scryfall.Cards.GetRandom();
            Console.WriteLine($"{card.Name}\t\t{card.ManaCost}\n");
            Console.WriteLine($"{card.TypeLine}\n");
            Console.WriteLine($"{card.OracleText}");
        }

6. Build & run

        dotnet build
        dotnet run

## Generating Clients

To generate your own clients

1. Install AutoRest via `npm` (`npm install -g autorest`)
2. Edit the Configuration section in this README
3. Run:
> `autorest README.md`

You may also run AutoRest in Docker by running:
> `docker run --rm -w /var/autorest -v $(PWD):/var/autorest azuresdk/autorest`

---

## Configuration 
The following are the settings for this using this API with AutoRest

> see https://aka.ms/autorest

``` yaml 
input-file: swagger.yaml

csharp:
  namespace: Scryfall.API
  output-folder: CSharp
nodejs:
  output-folder: NodeJS
python:
  output-folder: Python
  
directive:
- from: swagger-document
  where: $.info.title
  set: ScryfallClient
  reason: Set friendly client class names.    
```