## Integração com a API do GitHub usando Guzzle

![PHP](https://img.shields.io/badge/PHP-%5E8.3-blue)
![License](https://img.shields.io/badge/Code%20GNU-License-blue.svg)
![Guzzle](https://img.shields.io/badge/Guzzle-integration-blue.svg)

Este projeto demonstra como integrar a API do GitHub utilizando a biblioteca Guzzle em PHP. O exemplo inclui uma requisição PATCH para atualizar a descrição de um repositório.

### Configuração

Renomeie o arquivo .env.exemple para .env na raiz do projeto e adicione suas variáveis de ambiente:

```dotenv
GITHUB_API_URL='https://api.github.com/'
GITHUB_TOKEN='seu_token_de_acesso'
```

_Nota: Certifique-se de que o token de acesso tenha permissões adequadas para modificar repositórios._

### Licença

Este projeto está licenciado sob a licença [GNU General Public License v3.0](https://github.com/walissonaguirra/guzzle-github/blob/main/LICENSE).
