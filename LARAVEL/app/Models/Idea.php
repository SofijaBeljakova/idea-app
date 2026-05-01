public function up(): void
{
    Schema::create('ideas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained(); 
        $table->string('title');                     
        $table->text('description');               
        $table->timestamps();
    });
}