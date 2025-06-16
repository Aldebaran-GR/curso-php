<?php

declare(strict_types=1); //Habilita el tipado estricto

class NextMovie
{
    //Constructor usando properties promotion
    public function __construct(
        private string $title,
        private int $days_until,
        private string $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview,
    ) {}

    public function get_until_message(): string
    {
        $days = $this->days_until;

        return match (true) {
            $days === 0 => "¡Hoy se estrena!",
            $days === 1 => "Se estrena mañana",
            $days < 7   => "Se estrena esta semana",
            $days < 30  => "Se estrena en menos de un mes",
            default     => "Faltan $days días para el estreno"
        };
    }

    public static function fetch_and_create_movie(string $api_url): NextMovie
    {
        $result = file_get_contents($api_url);
        $data = json_decode($result, true);
        return new self(
            $data["title"],
            $data["days_until"],
            $data["following_production"]["title"] ?? "Desconocido", //Null coalesce operator
            $data["release_date"],
            $data["poster_url"],
            $data["overview"]
        );
    }

    public function get_data() 
    {
        return get_object_vars($this); //Devuelve todas las propiedades de la clase
    }
}
