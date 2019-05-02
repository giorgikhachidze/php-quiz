<?php

class Quiz
{
    public $questions = [
        [
            'title' => 'რა არის PHP?',
            'answers' => [
                'ჰიპერტექსტის პრეპროცესორი',
                'პირადი საწყისი გვერდი',
                'პირადი ჰიპერტექსტის პროცესორი',
                'საწყისი გვერდი'
            ],
            'correctAnswer' => 0
        ],
        [
            'title' => 'PHP კოდი რომელი ნიშნების შიგნით მუშაობს?',
            'answers' => [
                '&lt;script> ... &lt;/script&gt',
                '&lt;&> ... &lt;/&&gt;',
                '&lt;?php ... ?&gt;',
                '&lt;?php ... &lt;/?&gt;'
            ],
            'correctAnswer' => 2
        ],
        [
            'title' => 'როგორ დავბეჭდოთ ტექსტი PHP - ით?',
            'answers' => [
                'Document.write("Hello World");',
                'echo "Hello word";',
                '"Hello World";',
                'println!("Hello world!");'
            ],
            'correctAnswer' => 1
        ],
        [
            'title' => 'როგორ იწყება ცვლადის სახელი PHP - ში?',
            'answers' => [
                '$variable',
                '!variable',
                '&variable',
                'variable'
            ],
            'correctAnswer' => 0
        ]
    ];
}