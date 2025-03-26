<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



# API de Productos y Grupos - Laravel

## Descripción
Esta API permite administrar productos y su asignación a grupos. Se han implementado operaciones CRUD para productos y grupos, además de funcionalidades para asignar y remover productos de grupos.

---

## URL Base
```
http://127.0.0.1:8000/api/
```

---

## Endpoints

### **Productos**

#### Obtener lista de productos
- **Método:** `GET`
- **URL:** `/productos/list-product`
- **Descripción:** Retorna la lista de productos registrados.
- **Respuesta de ejemplo:**
```json
{
  "success": true,
  "message": "Lista de productos obtenida exitosamente",
  "data": [
    {
      "id": 1,
      "nombre": "Producto 1",
      "descripcion": "Descripción del producto",
      "precio": 100.50,
      "stock": 20,
      "fecha_creacion": "2025-03-26T12:00:00Z",
      "estado": "activo"
    }
  ]
}
```

#### Crear un producto
- **Método:** `POST`
- **URL:** `/productos/create-product`
- **Descripción:** Crea un nuevo producto.
- **Cuerpo del request:**
```json
{
  "nombre": "Producto Nuevo",
  "descripcion": "Descripción del producto",
  "precio": 150.75,
  "stock": 30,
  "estado": "activo"
}
```
- **Respuesta de ejemplo:**
```json
{
  "success": true,
  "message": "Producto creado exitosamente",
  "data": {
    "id": 2,
    "nombre": "Producto Nuevo",
    "descripcion": "Descripción del producto",
    "precio": 150.75,
    "stock": 30,
    "estado": "activo"
  }
}
```

#### Obtener un producto por ID
- **Método:** `GET`
- **URL:** `/productos/get/{producto}`
- **Descripción:** Obtiene los detalles de un producto específico.

#### Actualizar un producto
- **Método:** `PUT`
- **URL:** `/productos/update/{producto}`
- **Descripción:** Actualiza la información de un producto.

#### Eliminar un producto
- **Método:** `DELETE`
- **URL:** `/productos/delete/{producto}`
- **Descripción:** Elimina un producto por ID.

#### Asignar un producto a un grupo
- **Método:** `POST`
- **URL:** `/productos/asignar/{producto}/grupos/{grupo}`
- **Descripción:** Asigna un producto a un grupo específico.

#### Remover un producto de un grupo
- **Método:** `DELETE`
- **URL:** `/productos/removerGrupo/{producto}/grupos/{grupo}`
- **Descripción:** Remueve la asignación de un producto a un grupo.

---

### **Grupos**

#### Obtener lista de grupos
- **Método:** `GET`
- **URL:** `/grupos/list-grup`
- **Descripción:** Retorna la lista de grupos registrados.

#### Crear un grupo
- **Método:** `POST`
- **URL:** `/grupos/create-grup`
- **Descripción:** Crea un nuevo grupo.

#### Obtener un grupo por ID
- **Método:** `GET`
- **URL:** `/grupos/get/{grupo}`
- **Descripción:** Obtiene los detalles de un grupo específico.

#### Actualizar un grupo
- **Método:** `PUT`
- **URL:** `/grupos/update-grup/{grupo}`
- **Descripción:** Actualiza la información de un grupo.

#### Eliminar un grupo
- **Método:** `DELETE`
- **URL:** `/grupos/delete-grup/{grupo}`
- **Descripción:** Elimina un grupo por ID.

---

## Consideraciones
- Todos los endpoints devuelven respuestas en formato JSON.
- Se utiliza AJAX para las peticiones desde el frontend.
- Se recomienda utilizar herramientas como Postman para probar la API.

---

## Autores
**Juan Carlos Atencio Florez**

