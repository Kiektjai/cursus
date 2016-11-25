<?php

use Phinx\Migration\AbstractMigration;

class SeedTestimonialsTable extends AbstractMigration
{
  public function up()
  {
    $this->execute("
      insert into testimonials (title, testimonial, user_id)
      values
      ('Test Testimonial', 'blablablabla blablabla bla bla', 1)
    ");
  }

  public function down(){

  }
}
