# Endpoints
- Accepts an integer, converts it to a roman numeral, stores it in the database and returns the response.
- Lists all of the recently converted integers.
- Lists the top 10 converted integers.

## Routes
##### Return roman number and save it in database or update the record
- Route::get('number/{conv_number}', 'NumberController@convert');

##### List (recently) converted integers 
- Route::get('numbers', 'NumberController@index');

##### List top 10 converted integers
- Route::get('numbers/top10', 'NumberController@showTop10');

## Exemples
##### http://applicationName.test/api/number/10 =>X
##### http://applicationName.test/api/number/1000 => M
##### http://applicationName.test/api/number/3549 => MMMDXLIX
##### http://applicationName.test/api/number/1 => I
##### http://applicationName.test/api/number/3999 =>MMMCMXCIX



##### http://applicationName.test/api/numbers

=>

{
    "data": [
        {
            "id": 16,
            "conv_number": 3999,
            "conv_times": 1
        },
        {
            "id": 12,
            "conv_number": 1000,
            "conv_times": 2
        },
        {
            "id": 15,
            "conv_number": 1,
            "conv_times": 1
        },
        {
            "id": 13,
            "conv_number": 10,
            "conv_times": 3
        },
        {
            "id": 14,
            "conv_number": 3549,
            "conv_times": 1
        },
        {
            "id": 6,
            "conv_number": 25,
            "conv_times": 3
        },
        {
            "id": 10,
            "conv_number": 3177,
            "conv_times": 10
        },
        {
            "id": 9,
            "conv_number": 1770,
            "conv_times": 6
        },
        {
            "id": 8,
            "conv_number": 2305,
            "conv_times": 3
        },
        {
            "id": 7,
            "conv_number": 255,
            "conv_times": 6
        },
        {
            "id": 5,
            "conv_number": 788,
            "conv_times": 8
        },
        {
            "id": 4,
            "conv_number": 2042,
            "conv_times": 8
        },
        {
            "id": 3,
            "conv_number": 971,
            "conv_times": 5
        },
        {
            "id": 2,
            "conv_number": 3092,
            "conv_times": 3
        },
        {
            "id": 1,
            "conv_number": 2919,
            "conv_times": 6
        }
    ]
}



##### http://applicationName.test/api/numbers/top10

=>

{
    "data": [
        {
            "id": 10,
            "conv_number": 3177,
            "conv_times": 10
        },
        {
            "id": 4,
            "conv_number": 2042,
            "conv_times": 8
        },
        {
            "id": 5,
            "conv_number": 788,
            "conv_times": 8
        },
        {
            "id": 1,
            "conv_number": 2919,
            "conv_times": 6
        },
        {
            "id": 9,
            "conv_number": 1770,
            "conv_times": 6
        },
        {
            "id": 7,
            "conv_number": 255,
            "conv_times": 6
        },
        {
            "id": 3,
            "conv_number": 971,
            "conv_times": 5
        },
        {
            "id": 8,
            "conv_number": 2305,
            "conv_times": 3
        },
        {
            "id": 6,
            "conv_number": 25,
            "conv_times": 3
        },
        {
            "id": 2,
            "conv_number": 3092,
            "conv_times": 3
        }
    ]
}