<?php
// В проекте нет Front Controller'a. Есть Page Controller'ы они отвечают за генерацию главной страницы, страницы оформления заказа, страница  авторизации о продукте.
// Если оформить заказ пытается авторизованный пользователь, то контроллер позволяет оформить заказ при помощи метода
// checkoutAction(), в противному случае пользователю доступен только просмотр корзины. Попытка оформления заказа приводит к
// перенаправление на страницу авторизации.