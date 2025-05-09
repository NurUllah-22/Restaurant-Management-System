// src/types.ts
export type TableStatus = 'available' | 'occupied';

export interface Table {
  id: number;
  name: string;
  status: TableStatus;
  order?: Order;
}

export interface MenuItem {
  id: number;
  name: string;
  price: number;
}

export interface OrderItem {
  item: MenuItem;
  quantity: number;
}

export interface Order {
  items: OrderItem[];
}
