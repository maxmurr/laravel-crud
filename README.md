# Assignment 04 Resource Controller

เนื่องจากปัญหาที่ Windows ใช้งาน vite ซึ่งเป็น default bundling assets สำหรับ Laravel 9 ในแบบฝึกหัดนี้จึงใช้ Mix (ซึ่งเป็น bundling assets รูปแบบเก่า) แทน

## หลังจาก clone project

1. อย่าลืม `sail down` ใน Laravel Project อื่น
2. [https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects](https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects)
3. `cp .env.example .env`
4. ตรวจสอบไฟล์ .env ให้ถูกต้อง
5. `sail up -d`
6. `sail artisan key:generate`
7. `sail artisan migrate` (ในแบบฝึกหัดนี้จะสร้างตารางชื่อ artists)
8. `sail artisan db:seed` (ในแบบฝึกหัดนี้จะสร้างข้อมูลจากไฟล์ storage/app/artists-data.csv ดูตัวอย่างโค้ดการอ่านข้อมูลจากไฟล์ที่ Seeder)
9. `sail npm run watch` (ใช้แทน sail npm run dev ของ vite ที่เรียนในห้อง)

## งานในแบบฝึกหัด

ให้นิสิตเขียนการทำงานของทั้ง 7 ฟังก์ชัน ใน ArtistController ให้ทำงาน CRUD กับข้อมูล artists ตามรูปแบบของ resource controller
โดยให้ทำงานผ่านหน้าเว็บได้ทั้ง 7 ฟังก์ชัน (ผู้ใช้ไม่ต้องพิมพ์ URL เพื่อเข้าใช้งานฟังก์ชัน) พร้อมทั้งตกแต่งหน้าเว็บด้วย tailwindcss

## (ภาคผนวก) Migration from Vite to Laravel Mix

> สำหรับเปลี่ยน Laravel Project ที่ใช้สอนในคาบเรียน

[https://github.com/laravel/vite-plugin/blob/main/UPGRADE.md#migrating-from-vite-to-laravel-mix](https://github.com/laravel/vite-plugin/blob/main/UPGRADE.md#migrating-from-vite-to-laravel-mix)
