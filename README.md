<h1 align="center">Kata Kotor Laravel Package 🚫✋</h1>
<p>

  [![Latest Version on Packagist](https://img.shields.io/packagist/v/deogw/laravel-kata-kotor.svg?style=flat-square)](https://packagist.org/packages/deogw/laravel-kata-kotor)
  [![Build Status](https://img.shields.io/travis/deogw/laravel-kata-kotor/master.svg?style=flat-square)](https://travis-ci.org/deogw/laravel-kata-kotor)
  [![Quality Score](https://img.shields.io/scrutinizer/g/deogw/laravel-kata-kotor.svg?style=flat-square)](https://scrutinizer-ci.com/g/deogw/laravel-kata-kotor)
  [![Total Downloads](https://img.shields.io/packagist/dt/deogw/laravel-kata-kotor.svg?style=flat-square)](https://packagist.org/packages/deogw/laravel-kata-kotor)

</p>

> Package laravel untuk filter dan masking (sensor) kata kasar atau jorok. Terinspirasi oleh [Laravel Profanity Filter](https://github.com/Askedio/laravel-profanity-filter)

## Install

```sh
composer require deogw/laravel-kata-kotor
```

Khusus versi Laravel < 5.5 karena belum support fitur auto discover, maka harus mendaftarkan Service Provider dan Facade secara manual.

Tambahkan Service Provider dan Facade pada `config.app`

``` php
'providers' => [

    Deogw\KataKotorLaravel\Providers\KataKotorServiceProvider::class,

]
```

``` php
'aliases' => [

    'KataKotor' => Deogw\KataKotorLaravel\Facades\KataKotorFacade::class,

]
```


## Usage

```sh
use KataKotor;

KataKotor::check("Dasar kau bajingan !"); // Return Boolean : True

KataKotor::masking("Fucking Bastard"); // Return String : F*ck*ng B*st*rd

KataKotor::masking("Fucking Bastard", "x"); // Return String : Fxckxng Bxstxrd
```

## Run tests

```sh
.\vendor\bin\phpunit.bat
or
composer test
```

## Author

- [Deo Wibawa](https://github.com/deogw)
- [All Contributors](../../contributors)

## 🤝 Kontribusi
Anda dipersilahkan berkontribusi terhadap project ini, baik untuk membuat Issue, Pull Request maupun usulan Fitur tambahan.
<br />Silahkan cek [issues page](../../issues).

## Support

Give a ⭐️ if this project helped you!

## 📝 Lisensi

Copyright © 2019 [Deo Wibawa](https://github.com/deogw).<br />
Package ini gratis dan dibawah lisensi MIT. Silahkan lihat [file lisensi](LICENSE.md) untuk info lebih lanjut.

***

