<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidImage implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $mime_type_black_list= array(
# HTML may contain cookie-stealing JavaScript and web bugs
            'text/html', 'text/javascript', 'text/x-javascript',  'application/x-shellscript',
# PHP scripts may execute arbitrary code on the server
            'application/x-php', 'text/x-php', 'text/x-php',
# Other types that may be interpreted by some servers
            'text/x-python', 'text/x-perl', 'text/x-bash', 'text/x-sh', 'text/x-csh',
            'text/x-c++', 'text/x-c',
# Windows metafile, client-side vulnerability on some systems
# 'application/x-msmetafile',
# A ZIP file may be a valid Java archive containing an applet which exploits the
# same-origin policy to steal cookies
# 'application/zip',
        );

        $file_name = $value->getClientOriginalName();

        $tmp_file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if(!strlen($tmp_file_extension)) {
            return false;
        }

        $mime = explode(" ", $value->getClientMimeType());
        $mime = $mime[0];

        if (substr($mime, -1, 1) == ";") {
            $mime = trim(substr($mime, 0, -1));
        }

        if (in_array($mime, $mime_type_black_list)) {
            return false;
        }

        return !strpos("script", $value->get());
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans("validation.invalid_image");
    }
}
