<?php
namespace App\Controllers;

use App\Interfaces\ControllerMethodName;

class NewsController implements ControllerMethodName
{
    public function index()
    {
        $news = [
            [
                'title' => 'Перша новина',
                'text' => 'Це текст першої новини.',
                'date' => '2023-06-01',
            ],
            [
                'title' => 'Друга новина',
                'text' => 'Це текст другої новини.',
                'date' => '2023-06-02',
            ],
            [
                'title' => 'Третя новина',
                'text' => 'Це текст третьої новини.',
                'date' => '2023-06-03',
            ],
        ];

        // Передаємо масив з новинами на рендеринг шаблону
        return $this->render('news.latte', ['news' => $news]);
    }

    // Реалізуйте метод render() з інтерфейсу ControllerMethodName
    public function render($template, $data = [])
    {
        // Реалізація методу render() для вашого шаблону
        // ...
    }
}
