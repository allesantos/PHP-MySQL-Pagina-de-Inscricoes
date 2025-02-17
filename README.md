# 📌 Sistema de Inscrição

Este projeto é um sistema de inscrição desenvolvido em **PHP** onde os usuários podem enviar seu **nome** e **e-mail** através de um formulário. Os dados enviados são armazenados em um banco de dados **MySQL** para futuras referências.

## 📌 Índice
- [🚀 Recursos](#-recursos)
- [🛠 Tecnologias](#-tecnologias)
- [✅ Pré-requisitos](#-pré-requisitos)
- [💾 Instalação](#-instalação)
- [▶️ Uso](#-uso)
- [🤝 Contribuição](#-contribuição)
- [📄 Licença](#-licença)


## 🚀 Recursos
- 📋 Formulário de inscrição simples e intuitivo.
- 🗄️ Armazenamento dos dados em um banco de dados MySQL.
- 🔗 Integração entre **HTML**, **CSS** e **PHP**.
- ✅ Validação básica dos campos do formulário.

## 🛠 Tecnologias
- **HTML5**
- **CSS3**
- **PHP**
- **MySQL**

## 📌 Pré-requisitos
Antes de iniciar, certifique-se de ter os seguintes requisitos instalados em seu ambiente:
- **Servidor Apache** (pode usar XAMPP, WAMP ou outro servidor local)
- **PHP 7+**
- **MySQL**
- **Git** (opcional, para controle de versão)

## 🔧 Instalação
1. Clone este repositório ou faça o download dos arquivos:
   ```sh
   git clone https://github.com/seu-usuario/seu-repositorio.git
   ```
2. Mova os arquivos para a pasta do seu servidor local (ex: `htdocs` no XAMPP).
3. Importe o banco de dados para o MySQL:
   - Abra o **phpMyAdmin**.
   - Crie um banco de dados chamado `db_clientes`.
   - Importe o arquivo `db_clientes.sql`.
4. Configure as credenciais do banco no arquivo `config.php`:
   ```php
   $db_servidor = 'localhost';
   $db_usuario = 'root';
   $db_senha = '';
   $db_nomeDB = 'db_clientes';
   ```
5. Inicie o servidor local e acesse a página no navegador:
   ```
   http://localhost/seu-projeto
   ```

## 💻 Uso  
1. Acesse a página de inscrição.
2. Preencha os campos com seu **Nome** e **E-mail**.
3. Clique em **Enviar**.
4. Os dados serão armazenados no banco de dados.

## 🤝 Contribuição
Quer contribuir com este projeto? Siga os passos:
1. Faça um **fork** do repositório.
2. Crie uma **branch** para sua modificação:
   ```sh
   git checkout -b minha-modificacao
   ```
3. Faça o **commit** das suas alterações:
   ```sh
   git commit -m "Adicionando nova funcionalidade"
   ```
4. Envie para o repositório remoto:
   ```sh
   git push origin minha-modificacao
   ```
5. Abra um **Pull Request** no GitHub.

## 📜 Licença
Este projeto está licenciado sob a **MIT License** – veja o arquivo [LICENSE](LICENSE) para mais detalhes.

📌 Desenvolvido com ❤️ por Alexandre Santos
