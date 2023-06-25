# Módulo Order Comments (Comentários no Pedido)

O Módulo Order Comments é desenvolvido para Magento 2 e permite que os clientes adicionem comentários, notas ou mensagens especiais ao fazer o pedido na página de checkout, que pode ser visualizada tanto no back-end do administrador quanto na conta do cliente.

## Suporte: 

version - 2.3.x, 2.4.x

## Como Instalar

1. Faça Download do repositório ou o clone.
2. Descompacte os arquivos (se fez Download).
3. Copie a estrutura para dentro da pasta raíz de sua loja Magento.

# Habilitar Módulo:

```
- php bin/magento module:enable PalacioDasFerramentas_OrderComments
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush
```

# Desabilitar Módulo:

```
- php bin/magento module:disable PalacioDasFerramentas_OrderComments
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush
```
