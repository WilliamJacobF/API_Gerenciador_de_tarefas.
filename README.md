# API_Gerenciador_de_tarefas
 ## Resumo:
 * A API de gerenciamento de tarefas é um sistema que permite criar, ler, atualizar e excluir tarefas e seus respectivos prazos. Ela foi projetada para facilitar o gerenciamento de atividades, fornecendo endpoints que permitem interagir com o banco de dados de forma simples e eficiente.
 ## Arquitetura:
* O Projeto segue a arquitetura MVC(Model-View-Controller):um padrão de design de software amplamente utilizado no desenvolvimento de aplicações, especialmente aplicações web. Ela organiza o código em três componentes principais, cada um com responsabilidades distintas, o que facilita a manutenção, a escalabilidade e a separação de preocupações.
## tecnologias:
* Laravel(Framework)
* PHP
* Mysql (Banco de Dados Relacional)

---
## Configuração e instalação:

### Requisitos:
* PHP >= 8.0
* Composer
* MySQL
* Laravel >= 9.x

### **Instalação do Projeto**
1. Clone o repositório:
   ```bash
   git clone https://github.com/WilliamJacobF/API_Gerenciador_de_tarefas.git
   ```

2. Instale as dependências:
   ```bash
   composer install
   ```

3. Configure o arquivo `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=api
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. Execute as migrações para criar o banco de dados:
   ```bash
   php artisan migrate
   ```

5. Inicie o servidor:
   ```bash
   php artisan serve
   ```

Acesse a aplicação em `http://localhost:8000`.

---

## **Estrutura do Projeto**

```plaintext
/src
  /app
    /Http
      /Controllers
      /Requests
    /Models
    /Services
/config
/database
/routes
/tests
```

- **Controllers:** Gerenciam a lógica dos endpoints.
- **Models:** Representam as entidades do banco de dados.
- **Requests:** Validam os dados enviados para os endpoints.
- **Services:** Contêm a lógica de negócios.

---

## **Endpoints da API**

### **1. Criar Tarefa**
- **Método:** POST
- **Rota:** `/api/tarefas`
- **Descrição:** Cria uma nova tarefa.
- **Parâmetros no corpo:**
  ```json
  {
    "tarefa": "tarefa exemplo",
    "prazo": "prazo da tarefa",
  }
  ```

### **2. Listar Tarefas**
- **Método:** GET
- **Rota:** `/api/tarefas`
- **Descrição:** Lista todas as tarefas cadastradas.

### **3. Atualizar Tarefa**
- **Método:** PUT
- **Rota:** `/api/tarefas/{id}`
- **Descrição:** Atualiza uma tarefa existente.
- **Parâmetros no corpo:**
  ```json
  {
    "tarefa": "Nova tarefa",
    "prazo": "novo prazo"
  }
  ```


### **4. Excluir Tarefa**
- **Método:** DELETE
- **Rota:** `/api/tarefas/{id}`
- **Descrição:** Remove uma tarefa.

---


Para mais informações, consulte a [documentação do Laravel](https://laravel.com/docs).



