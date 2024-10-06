<?php

namespace Principles;

use Dotenv\Dotenv;
use Rakit\Validation\Validation;
use Rakit\Validation\Validator;

readonly class EnvValidator
{
    private Validation $validator;

    public function __construct(array $rules)
    {
        $dotEnv = Dotenv::createImmutable(__DIR__ . '/..');
        $env = $dotEnv->load();

        $this->validator = (new Validator())
            ->make($env, $rules);
    }

    public function validate(): void
    {
        $this->validator->validate();
    }

    public function fails(): bool
    {
        return $this->validator->fails();
    }
}
