// Views - Components
import WithholdingTax from '@/views/modules/ap/withholding_tax'
import Branch from '@/views/modules/ap/branch'
import Bank from '@/views/modules/ap/bank'
import BankAccount from '@/views/modules/ap/bank_account'
import Check from '@/views/modules/ap/check'
import RecurringPayment from '@/views/modules/ap/recurring_payment'
import RecurringPaymentDistribution from '@/views/modules/ap/recurring_payment_distribution'
import MonthlyPayment from '@/views/modules/ap/monthly_payment'
import CheckPaymentRequest from '@/views/modules/ap/check_payment_request'

export default {
    path: 'ap',
    redirect: '/dashboard',
    name: 'Accounts Payable',
    component: {
        render(c) {
            return c('router-view')
        },
    },
    children: [
        {
            path: 'withholding-tax',
            name: 'WithholdingTax',
            component: WithholdingTax,
        },
        {
            path: 'branch',
            name: 'Branch',
            component: Branch,
        },
        {
            path: 'bank',
            name: 'Bank',
            component: Bank,
        },
        {
            path: 'bank-account/:bank_id',
            name: 'BankAccount',
            component: BankAccount,
            props: true,
        },
        {
            path: 'check',
            name: 'Check',
            component: Check,
            props: true,
        },
        {
            path: 'recurring-payment',
            name: 'RecurringPayment',
            component: RecurringPayment,
        },
        {
            path: 'recurring-payment-distribution/:recurring_payment_id',
            name: 'RecurringPaymentDistribution',
            component: RecurringPaymentDistribution,
            props: true,
        },
        {
            path: 'monthly-payment',
            name: 'MonthlyPayment',
            component: MonthlyPayment,
        },
        {
            path: 'check-payment-request',
            name: 'CheckPaymentRequest',
            component: CheckPaymentRequest,
        },
    ],
}