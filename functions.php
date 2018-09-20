<?php

function clear_data($text)
{
    return trim(strip_tags($text));
}

function validate($input, $input_rules)
{
    $notifications = [];

    foreach ($input_rules as $title => $rules)
    {
        $array_rules = explode('|', $rules);

        foreach ($array_rules as $item_rule)
        {
            if (strpos($item_rule, 'min'))
                list($item_rule, $min) = explode(':', $item_rule);

            if (strpos($item_rule, 'max'))
                list($item_rule, $max) = explode(':', $item_rule);

            switch ($item_rule)
            {
                case 'required':
                    if (empty($input[$title]))
                        $notifications[$title]['empty_value'] = 'Значение не должно быть пустым';
                    break;

                case 'length-min':
                    if (strlen($input[$title]) < $min)
                        $notifications[$title]['short_value'] = 'Значение не должно быть меньше чем '.$min.' символов';
                    break;

                case 'length-max':
                    if (strlen($input[$title]) > $max)
                        $notifications[$title]['long_value'] = 'Значение не должно быть больше чем '.$max.' символов';
                    break;
            }
        }
    }

    return $notifications;
}
