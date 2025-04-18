# 프로젝트 개발 환경 설정 및 실행 방법

## 개발 환경 설정

1. PHP 설치
   - PHP 7.4 이상 버전이 필요합니다.
   - [PHP 공식 웹사이트](https://www.php.net/downloads.php)에서 다운로드하여 설치하세요.

2. Composer 설치
   - [Composer 공식 웹사이트](https://getcomposer.org/download/)에서 설치 파일을 다운로드하여 설치하세요.

3. 프로젝트 의존성 설치
   - 프로젝트 루트 디렉토리에 `composer.json` 파일이 필요합니다.
   - `composer.json` 파일에는 다음과 같은 내용이 포함되어야 합니다:
     ```json
     {
       "require": {
         "php": ">=7.3",
         "phpunit/phpunit": "^9.0"
       },
       "scripts": {
         "dev": "php -S localhost:8000",
         "test": "phpunit"
       }
     }
     ```
   - 의존성 설치 명령어:
     ```bash
     composer install
     ```
   - 설치된 의존성은 `vendor` 디렉토리에 저장됩니다.

## 실행 방법

### 개발 서버 실행
```bash
composer run dev
```
- 개발 서버가 `localhost:8000`에서 실행됩니다.

### 테스트 실행
```bash
composer run test
```
- PHPUnit을 사용하여 테스트를 실행합니다.
