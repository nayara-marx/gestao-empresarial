# 🧾 Sistema de Gestão Empresarial – Laravel

## 📋 Descrição do Projeto
O **Sistema de Gestão Empresarial** é um projeto desenvolvido em **Laravel**, com o objetivo de aplicar os conceitos de **Desenvolvimento Web** utilizando o padrão **MVC (Model-View-Controller)**.  
O sistema permite o **cadastro de clientes e produtos**, **integração com API ViaCEP**, **autenticação de usuários (login/logout)** e uma **área administrativa** para gerenciamento de informações.

---

## 🏗️ Funcionalidades Principais

✅ Cadastro de Clientes com validação e integração ViaCEP  
✅ Cadastro de Produtos com upload de imagens  
✅ Autenticação de usuários (login, logout, registro)  
✅ Layout responsivo e moderno com cores neutras (preto e cinza)  
✅ Mensagens de sucesso e erro no frontend  
✅ Banco de dados relacional com Migrations  
✅ Controllers organizados para cada módulo  
✅ Estrutura limpa e documentada no padrão Laravel

---

## ⚙️ Tecnologias Utilizadas

| Camada | Tecnologias |
|:--|:--|
| **Backend** | PHP 8.x, Laravel 11 |
| **Frontend** | Blade Templates, Bootstrap 5, CSS personalizado |
| **Banco de Dados** | MySQL / SQLite |
| **API Externa** | ViaCEP (busca de endereços via CEP) |
| **Servidor Local** | Artisan (`php artisan serve`) |

---

## 🧩 Estrutura do Projeto (Principais Pastas)

gestao-empresarial/
│
├── app/
│ ├── Http/
│ │ ├── Controllers/
│ │ │ ├── HomeController.php
│ │ │ ├── ClienteController.php
│ │ │ └── ProdutoController.php
│ │
│ └── Models/
│ ├── Cliente.php
│ └── Produto.php
│
├── resources/
│ ├── views/
│ │ ├── layouts/app.blade.php
│ │ ├── pages/
│ │ │ ├── clientes.blade.php
│ │ │ └── produtos.blade.php
│ │ └── auth/
│ │ ├── login.blade.php
│ │ └── register.blade.php
│
├── database/
│ └── migrations/
│
├── routes/
│ └── web.php
│
└── README.md

### 📋 Descrição das Principais Pastas
- **app/Http/Controllers/** → Controladores responsáveis pela lógica das rotas.  
- **app/Models/** → Modelos que representam as tabelas do banco de dados.  
- **database/migrations/** → Scripts responsáveis por criar as tabelas no banco de dados.  
- **resources/views/** → Páginas e componentes do front-end, utilizando Blade.  
- **routes/web.php** → Define as rotas principais do sistema.  
- **public/** → Contém os arquivos acessíveis publicamente (CSS, imagens, JS). 
---

## 🧾 Fontes e Referências Utilizadas

| Tipo | Fonte | Link |
|:--|:--|:--|
| **Documentação Laravel** | Laravel Docs | [https://laravel.com/docs](https://laravel.com/docs) |
| **Bootstrap** | Layout responsivo e formulários | [https://getbootstrap.com/docs](https://getbootstrap.com/docs) |
| **DigitalOcean** | Estruturação de projetos Laravel | [https://www.digitalocean.com/community/tags/laravel](https://www.digitalocean.com/community/tags/laravel) |
| **Dev.to** | Dicas de Laravel e melhores práticas | [https://dev.to/t/laravel](https://dev.to/t/laravel) |
| **Medium** | Uso de Blade Templates | [https://medium.com/search?q=laravel+blade](https://medium.com/search?q=laravel+blade) |
| **Alura** | Fundamentos do Laravel | [https://www.alura.com.br/artigos/o-que-e-laravel](https://www.alura.com.br/artigos/o-que-e-laravel) |
| **Rocketseat** | CRUD no Laravel | [https://blog.rocketseat.com.br/tag/laravel/](https://blog.rocketseat.com.br/tag/laravel/) |
| **ViaCEP** | API de endereços | [https://viacep.com.br](https://viacep.com.br) |
| **UX Collective** | Princípios de design de interface | [https://brasil.uxdesign.cc/](https://brasil.uxdesign.cc/) |
| **Smashing Magazine** | Acessibilidade e UX | [https://www.smashingmagazine.com/category/accessibility](https://www.smashingmagazine.com/category/accessibility) |

---

