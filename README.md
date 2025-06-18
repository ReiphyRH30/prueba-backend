---

## 🔗 Endpoints Principales

### 📦 Productos

- `GET /api/products` – Listar productos ----------
- `POST /api/products` – Crear producto 
- `GET /api/products/{id}` – Ver producto
- `PUT /api/products/{id}` – Actualizar producto
- `DELETE /api/products/{id}` – Eliminar producto

### 💰 Precios de Productos

- `GET /api/products/{id}/prices` – Listar precios del producto
- `POST /api/products/{id}/prices` – Crear nuevo precio en otra divisa

### 💱 Divisas

- `GET /api/currencies` – Listar divisas ----------
- `POST /api/currencies` – Crear divisa ----------
- `GET /api/currencies/{id}` – Ver detalles y productos relacionados ----------
- `PUT /api/currencies/{id}` – Actualizar divisa ----------
- `DELETE /api/currencies/{id}` – Eliminar divisa ----------

---

## 🧪 Ejemplo de Request JSON

### Crear Producto

```json
{
    "name": "Laptop X500",
    "description": "Laptop para desarrolladores",
    "price": 54000,
    "currency_id": 1,
    "tax_cost": 5000,
    "manufacturing_cost": 12000
}
```
