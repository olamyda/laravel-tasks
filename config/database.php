public function up()
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();  // Primary key
        $table->string('title');  // Title of the task
        $table->text('description')->nullable();  // Description of the task
        $table->boolean('completed')->default(false);  // Status of the task
        $table->timestamps();  // created_at and updated_at columns
    });
}
