public function up(): void
{
    Schema::create('produtos', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->text('descricao');
        $table->decimal('preco', 10, 2);
        $table->string('imagem');
        $table->timestamps();
    });
}
