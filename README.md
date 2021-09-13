# laravel_sosoeueun
Personal studies.
프로젝트 만들기 부터!
>윈도우 터미널 또는 VSCode터미널로 들어간다

프로젝트 생성	composer create-project laravel/laravel 원하는_프로젝트이름
생성한 프로젝트 파일로 이동	cd 원하는_프로젝트이름
생성한 프로젝트의 서버 키기	php artisan serve

라라벨 명령어로 프로젝트 만들기
-> 시스템 path에 환경변수 설정 해줘야 함
	composer global require laravel/installer
프로젝트 생성	laravel new 원하는_프로젝트이름
생성한 프로젝트 파일로 이동	cd 원하는_프로젝트이름
생성한 프로젝트의 서버 키기	php artisan serve

디렉토리 구조
루트 디렉토리	app
	응용 프로그램의 핵심 코드 포함
	거의 모든 클래스가 이 디렉토리에 있음
	bootstrap
	성능 최적화를 위해 프레임워크에서 생성된 파일 포함
	일반적으로 건들일 없음
	config
	응용 프로그램의 구성 파일을 제공
	database
	database migrations, model factories, seeds 포함
SQLite 데이터베이스를 저장가능
	public
	자동 로딩을 입력하는 모든 요청에 대한 진입점
ex) 이미지, JavaScript 및 CSS
	resources
	views, 컴파일 되지않은 JavaScript 및 CSS, 모든 언어파일
	routes
	응용 프로그램의 경로 정의
	web.php
	CSRF 보호 및 쿠키 암호화 제공경로 포함
모든 경로가 web.php파일에 정의될 가능성이 높음
	api.php
	
	console.php
	모든 클로저 기반 콘솔 명령 정의
	channels.php
	
	storage
	app
	생성 된 모든 파일 저장
	framework
	생성 된 파일 및 캐시에 사용
	log
	로그 파일 포함
	tests
	자동화 된 테스트 포함
	각 테스트 클래스에는 단어가 접미사로 추가되어야 함
	vendor
	composer의 종속성 포함
앱 디렉토리	app디렉토리 의 많은 클래스는 Artisan이 명령을 통해 생성 가능
	사용 가능한 명령 검색 php artisan list make
	
	Broadcasting
	Broadcasting의 모든 클래스를 포함
	make:channel명령을 사용하여 생성
	Console
	make:command 
	사용자 정의 장인의 모든 명령 포함
	사용자 지정 Artisan 명령이 등록
	Events
	기본적으로 존재하지 않음
	event:generate및 make:eventArtisan 명령에 의해 생성
	Exceptions
	응용 프로그램의 예외 핸들러를 포함
	Http
	컨트롤러, 미들웨어 및 양식 요청 포함
	요청을 처리하는 거의 모든 논리가 이 디렉토리에 배치
	Jobs
	기본적으로 존재하지 않음
	make:jobArtisan 명령 실행시 생성
	Listeners
	기본적으로 존재하지 않음 
	event:generate 또는 make:listenerArtisan 명령 실행 시생성
	Mail
	기본적으로 존재하지 않음
	make:mailArtisan 명령 실행시 생성
	Models
	데이터베이스 작업을 위한 간단한 ActiveRecord 구현 제공
	모델을 사용시, 테이블의 데이터 쿼리, 새 레코드를 삽입 가능
	Notifications
	기본적으로 존재하지 않음
	make:notificationArtisan 명령 실행시 생성
	응용 프로그램 내에서 발생하는 이벤트에 대한 간단한 알림
	Policies
	기본적으로 존재하지 않음
	make:policyArtisan 명령 실행시 생성
	Providers
	
	Rules
	기본적으로 존재하지 않음
	 make:ruleArtisan 명령 실행시 생성
응용 프로그램에 대한 사용자 지정 유효성 검사 규칙 객체 포함

Laravel Breeze
: Laravel의 모든 인증 기능을 최소한으로 간단하게 구현한 것
(로그인, 등록, 비밀번호 재설정, 이메일 확인 및 비밀번호 확인 포함)

기본 뷰 레이어	스타일
	 TailwindCSS
	템플릿
	Blade

breeze 설치 방법
	1. 생성한 프로젝트에 DB구성 후
	2. DB마이그레이션 실행	php artisan migrate
	3.  
	Composer를 사용하여 설치가능	composer require laravel/breeze --dev
	php artisan breeze:install
	
	npm install
	npm run dev
	php artisan migrate
	
	웹 브라우저에서  	/login , /registerURL로 이동가능
	 Breeze의 모든 경로	routes/auth.php파일 내에서 정의
![image](https://user-images.githubusercontent.com/56391441/133069648-03e0b61f-b963-4450-b792-eb92fabe886d.png)
