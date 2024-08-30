<?php
  
namespace Database\Factories;
  
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;
  
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
  
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;
      
    /**
     * Define the model's default state.
     *
     * @return array

     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'slug' => Str::slug($this->faker->name),
            'body' => $this->faker->text,
        ];
    }
}