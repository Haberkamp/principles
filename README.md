# 📦 Principles

Validate your .env file and save yourself some headaches.

## 🌟 Highlights

- Validates your .env file
- CLI and programmatic usage


## ℹ️ Overview

Missing environment variables or incorrect value can cause some nasty bugs.
Principles helps you to avoid those bugs by validating your .env file,
saving you time and headaches.


### ✍️ Authors

Hi my name is Nils, I like to create things that make life easier.
Creating a package that validates .env files is one of those things.


## 🚀 Usage

There are two ways to use this package: CLI and programmatic.


### CLI

In the root of your project create a `principles.json` file. 
This file contains all the env variables you want to validate.
    
```json
{
  "MY_ENV_VAR": "required|string"
}
```

There are many rules you can use to validate your env variables. 
This [list](https://github.com/rakit/validation?tab=readme-ov-file#available-rules)
contains all of them.

Then run the following command:

```bash
./vendor/bin/principles
```


### Programmatic

```php
// Either define the rules here or load them from a file
$rules = [
    'MY_ENV_VAR' => 'required|string',
];

$validation = new \Principles\EnvValidator($rules);

$validation->validate();

if ($validation->fails()) {
  // TODO: handle errors
}
```


## ⬇️ Installation

Use composer to add this package to the development dependencies of your project.

```bash
composer require principles/principles --require-dev
```

Requirements: PHP 7.4 or higher


## 💭 Feedback and Contributing

If you have any suggestions or improvements, please open an issue
or a pull request. I welcome any feedback.
