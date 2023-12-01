# List_Students
Projeto "Lista de Estudantes" é um sistema de gerenciamento básico desenvolvido utilizando as tecnologias PHP, MySQL, MVC, HTML, CSS e Bootstrap. Este projeto tem como objetivo permitir a criação, leitura, atualização e exclusão (CRUD) de registros de estudantes em um banco de dados.

Tecnologias Utilizadas:

PHP: Linguagem de programação server-side amplamente utilizada para o desenvolvimento web.
MySQL: Sistema de gerenciamento de banco de dados relacional para armazenamento e recuperação eficiente de dados.
MVC (Model-View-Controller): Padrão arquitetural que organiza o código em três componentes principais para facilitar a manutenção e escalabilidade do sistema.
HTML: Linguagem de marcação para a criação de páginas web.
CSS: Linguagem de estilo utilizada para a apresentação visual das páginas web.
Bootstrap: Framework front-end que simplifica o desenvolvimento de interfaces responsivas e atraentes.
Estrutura do Projeto:
O projeto adota a arquitetura MVC para organizar o código de maneira eficiente. As principais pastas e seus conteúdos são:

Model (modelo): Responsável pela interação com o banco de dados. Contém as classes que representam os objetos manipulados pelo sistema, como a classe EstudanteModel para lidar com dados de estudantes.

View (visão): Responsável pela apresentação dos dados ao usuário. Inclui os arquivos HTML e CSS que compõem as páginas web, como listagem.php para exibir a lista de estudantes.

Controller (controle): Gerencia a interação entre o modelo e a visão. Inclui classes como EstudanteController que processam as solicitações do usuário e atualizam o modelo de acordo.

Banco de Dados: O banco de dados MySQL armazena informações sobre os estudantes, como nome, idade e curso. A tabela estudantes é criada para esse fim.

Bootstrap: Utilizado para o design responsivo e amigável das páginas, garantindo uma experiência consistente em diferentes dispositivos.

Funcionalidades:
O sistema oferece as seguintes funcionalidades:

Listagem de Estudantes: Apresenta uma tabela com os estudantes cadastrados, permitindo a visualização rápida de suas informações.

Adição de Estudantes: Permite a inserção de novos estudantes no banco de dados, fornecendo formulários intuitivos e validação de dados.

Atualização de Estudantes: Possibilita a edição das informações de estudantes existentes, garantindo a consistência e precisão dos dados.

Exclusão de Estudantes: Permite a remoção de estudantes do sistema, evitando registros desnecessários.
O projeto "Lista de Estudantes" demonstra a aplicação prática de tecnologias web modernas para criar um sistema CRUD eficiente e amigável. Com uma arquitetura bem definida e a utilização de frameworks como Bootstrap, o projeto é escalável e pode ser expandido para incluir novas funcionalidades conforme necessário.
