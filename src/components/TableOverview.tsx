import { Table } from '../types';

interface TableOverviewProps {
  tables: Table[];
  onSelect: (tableId: number) => void;
}

export default function TableOverview({ tables, onSelect }: TableOverviewProps) {
  return (
    <div className="grid grid-cols-2 gap-4">
      {tables.map((table) => (
        <button
          key={table.id}
          onClick={() => onSelect(table.id)}
          className={`rounded-2xl p-4 shadow ${
            table.status === 'occupied' ? 'bg-red-100' : 'bg-green-100'
          }`}
        >
          <h3 className="text-lg font-bold">{table.name}</h3>
          <p className="text-sm capitalize">{table.status}</p>
        </button>
      ))}
    </div>
  );
}
