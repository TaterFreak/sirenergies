interface ICompany {
    name: string;
    id: number;
} 

Alpine.store('companyStore', {
    company: JSON.parse(localStorage.getItem('company') || 'null') as ICompany | null,
    updateCompany(newData: ICompany) {
        this.company = newData;
        localStorage.setItem('company', JSON.stringify(this.company));
    }
} as { company: ICompany | null; updateCompany: (newData: ICompany) => void });