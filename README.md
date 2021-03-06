<p align="center">
    <img src="https://placeholdit.imgix.net/~text?txtsize=80&bg=ffffff&txt=Yii2+Hybrid+Kit&w=1140&h=200&txttrack=0"
        alt="Yii2 Hybrid Kit">
</p>
<p align="center">
    <a href="https://www.versioneye.com/user/projects/57bc8c85968d6400336020cb" target="_BLANK">
        <img src="https://www.versioneye.com/user/projects/57bc8c85968d6400336020cb/badge.svg?style=flat-square"
            alt="Dependency Status" />
    </a>
    <a href="https://travis-ci.org/XzAeRo/yii2-hybrid-kit" target="_BLANK">
        <img src="https://img.shields.io/travis/XzAeRo/yii2-hybrid-kit/master.svg?style=flat-square"
            alt="Build Status" />
    </a>
    <a href="https://github.com/trntv/yii2-starter-kit" target="_BLANK">
        <img src="https://img.shields.io/badge/original%20project-yii2--starter--kit-blue.svg?style=flat-square"
            alt="Original Project" />
    </a>
</p>
<p align="center"><sup><strong>A Yii2 Application Template ready for Big Data reporting.<br />
</strong></sup></p>

# How do I start?

I will assume that you already have `git`, [`docker-compose`](https://docs.docker.com/compose/install) and [`composer`](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-14-04) installed in your machine and available from your shell.

## Docker Installation

Clone or download the project if you haven't already:

```bash
$ git clone git@github.com:XzAeRo/yii2-hybrid-kit.git
```

Then, just run the `docker-install.sh` script:
```bash
$ sh docker-install.sh
```

This will:
* Build the neccesary Docker containers.
* Leave the containers running as daemons.
* Install the PHP dependencies using `composer`.
* Run an initial installation script within the application (run migrations, set correct file permissions, etc.).
