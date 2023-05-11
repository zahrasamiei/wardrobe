<?php

return [
    "orderColumn" => env("ORDER_BY_COLUMN", "id"),
    "orderDir" => env("ORDER_BY_DIR", "asc"),
    "limit" => env("LIMIT_INDEX", 10),
    "page" => env("START_PAGE", 1),
    "newRequestMinuteForPasswordReset" => env("REQUEST_MINUTE_PASSWORD_RESET", 1),
    "newRequestMinuteForEmailVerification" => env("REQUEST_MINUTE_EMAIL_VERIFICATION", 1),
    "expiredRequestMinuteForPasswordReset" => env("EXPIRED_REQUEST_PASSWORD_RESET", 20),
    "expiredRequestMinuteForEmailVerification" => env("EXPIRED_REQUEST_EMAIL_VERIFICATION", 20),
];
