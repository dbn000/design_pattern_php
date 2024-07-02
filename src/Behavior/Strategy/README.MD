# Plataforma de Comercio Electrónico - Patrones de Diseño

## Contexto del Mundo Real

Imagina que estás desarrollando una plataforma de comercio electrónico. En esta plataforma, los usuarios pueden pagar sus compras a través de diferentes métodos de pago: tarjeta de crédito 💳, PayPal 🅿️, criptomonedas 🪙 y transferencia bancaria 💸. Cada método de pago tiene su propia lógica de procesamiento, validación y ejecución de la transacción.

## Requisitos

- **Modularidad**: Necesitas que el código sea modular para que sea fácil añadir nuevos métodos de pago en el futuro sin afectar el sistema existente.
- **Intercambiabilidad**: Los usuarios deben poder seleccionar su método de pago preferido en el momento de la compra.
- **Mantenibilidad**: El código debe ser fácil de mantener, de modo que cualquier cambio en la lógica de un método de pago no afecte a los otros métodos.

## Tarea

Implementa una solución utilizando el patrón de diseño **Strategy** para manejar los diferentes métodos de pago en la plataforma.
