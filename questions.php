<?php

class Quiz
{
    // ცვლადი რომელიც ინახავს კითხვებს პასუხებსა და სწორ პასუხებს
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

    /**
     * მომხმარებლისგან გამოგზავნილ მასივის ინდექსს გავზრდით 1 - ით
     * შემდეგ შევადარებთ ჩვენი კითხვების მასივების ინდექსს თუ მეტია შევა ფუნქციაში
     * მაგ: ჩვენი მასივის ინდექსების რაოდენობა არის 4 მომხმარებელმა მონიშნა 4 პასუხი ფორმაში
     * მომხმარებლის მონიშნულ კითხვების მასივის ინდექსს 4 + 1 და 5 მეტია ჩვენს 4 ზე და შევა თუ
     * არმონიშნავს ყველა კითხვაზე პასუხს ვერიქნება მეტი ვერასდროს და ყოველთვის false დაბრუნდება.
     */
    public function checkArray($questionsCount, $answerCount) {
        $answerCount++;

        if (!is_array($answerCount)) {
            return $answerCount > $questionsCount ? true : false;
        }
    }
}