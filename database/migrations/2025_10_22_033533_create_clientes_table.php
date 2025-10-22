public function up(): void
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('sobrenome');
        $table->string('cpf')->unique();
        $table->string('email')->unique();
        $table->string('cep');
        $table->string('logradouro');
        $table->string('bairro');
        $table->string('cidade');
        $table->string('uf', 2);
        $table->timestamps();
    });
}
