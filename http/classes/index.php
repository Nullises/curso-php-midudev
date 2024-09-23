<?php 
declare(strict_types=1); 

class NextMovie {
    public function __construct(
        private string $title,
        private string $poster_url,
        private string $release_date,
        private array $following_production,
        private int $days_until
    )
    {
        
    }

    public static function get_data_and_create_movie(string $url): NextMovie {
    $data = file_get_contents($url);
    $data = json_decode($data, true);
    return new self(
        $data['title'],
        $data['poster_url'],
        $data['release_date'],
        $data['following_production'],
        $data['days_until']
    );
    }

    public function get_until_message(): string {
     $days = $this->days_until;   
    return match(true) {
        $days === 0 => "¡SE ESTRENA HOY!",
        $days === 1 => "¡SE ESTRENA MAÑANA!",
        $days < 7 => "¡SE ESTRENA ESTA SEMANA!",
        default => "¡SE ESTRENA EN " . $days . " DÍAS!"
    };
    }

    public function get_data(){
        return get_object_vars($this);
    }

}