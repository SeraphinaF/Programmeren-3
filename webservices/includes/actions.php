<?php
/**
 * @return array
 */
function getProducts()
{
    return [
        [
            "id" => 1,
            "name" => "Pindakaas",
            "price" => "€ 3.69",
            "image" => "./images/pindakaas.jpg",
        ],
        [
            "id" => 2,
            "name" => "Boerenkool",
            "price" => "€ 2.00",
            "image" => "./images/boerenkool.jpg",
        ],
        [
            "id" => 3,
            "name" => "Tomaten",
            "price" => "€ 1,69 ",
            "image" => "./images/tomaten.jpg",
        ],
        [
            "id" => 4,
            "name" => "Kaas",
            "price" => "€ 3.35",
            "image" => "./images/kaas.jpg",
        ],
        [
            "id" => 5,
            "name" => "Campina Langlekker halfvolle melk",
            "price" => "€ 1.79",
            "image" => "./images/melk.jpg",
        ],
        [
            "id" => 6,
            "name" => "Greenfields Beefburger naturel",
            "price" => "€ 3.99",
            "image" => "./images/beefburger.jpeg",
        ],
        [
            "id" => 7,
            "name" => "Desperados Original",
            "price" => "€ 1.71",
            "image" => "./images/desperados.jpeg",
        ],
        [
            "id" => 8,
            "name" => "Unox noodles kip",
            "price" => "€ 0.79",
            "image" => "./images/noodles.jpg",
        ],
        [
            "id" => 9,
            "name" => "Dr. Oetker Ristorante pizza salami",
            "price" => "€ 2.99",
            "image" => "./images/pizza.jpg",
        ],
        [
            "id" => 10,
            "name" => "Lotus Biscoff speculoos koek",
            "price" => "€ 1.75",
            "image" => "./images/lotus.jpg",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getProductDetails($id)
{
    $tags = [
        1 => [
            "ingredients" => "<strong>Ingrediënten:</strong> geroosterde pinda.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 0.00g per 100 gram",
            "tags" => ['Broodbeleg']
        ],
        2 => [
            "ingredients" => "<strong>Ingrediënten:</strong> boerenkool. <br>
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 0.00g per 100 gram",
            "tags" => ['Groenten']
        ],
        3 => [
            "ingredients" => "<strong>ingredienten:</strong> tomaten.",
            "tags" => ['Groenten']
        ],
        4 => [
            "ingredients" => "<strong>ingredienten:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Zuivel']
        ],
        5 => [
            "ingredients" => "<strong>ingredienten:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Zuivel']
        ],
        6 => [
            "ingredients" => "<strong>ingredienten:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Zuivel']
        ],
        7 => [
            "ingredients" => "<strong>ingredienten:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Zuivel']
        ],
        8 => [
            "ingredients" => "<strong>ingredienten:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Zuivel']
        ],
        9 => [
            "ingredients" => "<strong>ingredienten:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Zuivel']
        ],
        10 => [
            "ingredients" => "<strong>ingredienten:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Zuivel']
        ]
    ];

    return $tags[$id];
}